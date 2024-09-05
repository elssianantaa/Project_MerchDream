<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\pesanan;
use App\Models\pesananProduk;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

   
    public function index(Request $request)
    {
      
        $cart = session()->get('cart', []);
        $totalPrice = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        pesananProduk::where('nohp', $request->nohp)->delete();

        return view('order', ['cart' => $cart, 'totalPrice' => $totalPrice]);
    }
 
    public function store(Request $request)
    {
      
        $cart = session()->get('cart', []);
        $totalPrice = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        cart::where('user_id', $request->id)->delete();

        return view('order', ['cart' => $cart, 'totalPrice' => $totalPrice]);      
    }

    public function showhistoryy(){
        $data['pesananProduk'] = pesananProduk::all();
        return view('history', $data);
    }

    public function historyy(Request $request){

        $pesananProduk = pesananProduk::create([
            "user_id" => Auth::id(),
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'wktu_pemesanan' => $request->wktu_pemesanan,
            'status' => 'Sedang Diproses',
        ]);

            cart::destroy($request->user_id);
        return redirect('history');

    }

    public function showorder(){
        $data['pesananProduk'] = pesananProduk::all();
        return view('dataPenjualan', $data);
    }

  

}