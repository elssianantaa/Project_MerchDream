<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function search(Request $request)
    {
        $cari = $request->cari;

        $data['cart'] = cart::where('produk', 'like', "$cari%");
        return view('cart', $data);
    }
    public function addToCart(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required|integer|min:1'
        ]);
            $produk = produk::findOrFail($id);
    
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->jumlah;
            $cart[$id]['total_price'] = $cart[$id]['quantity'] * $cart[$id]['price']; 
        } else {
            $cart[$id] = [
                'photo' => $produk->foto,
                'name' => $produk->produk,
                'price' => $produk->harga,
                'quantity' => $request->jumlah,
                'total_price' => $produk->harga * $request->jumlah 
            ];
        }
    
        cart::create([
            'user_id' => Auth::id(),
            'produk' => $produk->produk,
            'jumlah' => $request->jumlah,
        ]);
    
        session()->put('cart', $cart);
    
        return redirect()->route('cart.show')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
    

        public function showCart()
        {
            $cart = session()->get('cart', []);
            $total = array_reduce($cart, function ($carry, $item) {
                return $carry + ($item['price'] * $item['quantity']);
            }, 0);
    
            return view('cart', compact('cart', 'total'));
        }

        public function deleteCart($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        cart::where('user_id', Auth::id())
        ->where('user_id', $id)
        ->delete();

        return redirect()->route('cart.show')->with('success', 'Produk berhasil dihapus dari keranjang.');
    }

    public function showcartdt(){
        $data['dataCart'] = cart::all();
        return view('dataCart', $data);
    }
    
    
}
