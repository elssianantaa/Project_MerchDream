<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\kategori;
use App\Models\pesananProduk;
use App\Models\produk;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    //
    public function show(){
        $data['produk'] = produk::all();
        $data['total_produk'] = produk::count();
        return view('produk', $data);
    }

    public function search(Request $request){
        $data['produk'] = produk::where('produk', $request->cari)->orWhere('desk', $request->cari)->get();
        $data['total_produk'] = $data['produk']->count();
        return view('produk', $data);
    }

    public function searchShop(Request $request){
        $cari = $request->cari;
        $data['produk'] = produk::where('produk', 'like', "$cari%")
            ->orWhere('desk', 'like', "$cari%")
            ->get();
        $data['total_produk'] = $data['produk']->count();
        return view('shop', $data);
    }
    
    public function create(){
        $data['kategori'] = kategori::all();
        return view('produkCreate', $data);
    }

    public function add(Request $request){

        $validateData = $request->validate([
            'produk' =>['required', 'min:3'],
            'foto' => 'image',
            'desk' =>['required'],
            'stok' =>['required'],
            'harga' => 'required',
            'kategoris_id' => ['kategoris_id']
        ]);

        $fileName = '';

        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('public/'.$fileName);
        }

        $produk = produk::create([
            'produk' => $request->produk,
            'foto' => $fileName,
            'desk' => $request->desk,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'kategoris_id' => $request->kategoris_id
        ]);

        return redirect('produk');
    }

    public function delete(Request $request){
        $user = produk::find($request->id);
        $delete = produk::where('id', $request->id)->delete();
        if ($delete) {
            if ($user->foto) {
                Storage::delete('public' .$user->foto);
            }
        } 

        return redirect('produk');
    }

    public function edit(Request $request){
        $data['kategori'] = kategori::all();
        $data['produk'] = produk::find($request->id);
        return view('produkUpdate', $data);
    }

    public function update(Request $request){

        $fileName = '';

        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('public/'.$fileName);
        }

        $update = produk::where('id', $request->id)->update([
            'produk' => $request->produk,
            'foto' => $fileName,
            'desk' => $request->desk,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'kategoris_id' => $request->kategoris_id
        ]);
        $produk = produk::findOrFail($request->id);


        if ($produk->foto) {
            Storage::delete('foto' . $produk->foto);
        }

        return redirect('produk');

    }

    public function db(){
        $data['total_produk'] = produk::count();
        $data['total_user'] = User::count();
        $data['total_kategori'] = kategori::count();
        $data['total_order'] = pesananProduk::count();
        $data['total_cart'] = cart::count();
        return view('dasboard', $data);
    }

   
    public function tmpshow(){
        $data['produk'] = Produk::take(8)->get();
        $data['total_produk'] = produk::count();
        return view('tampilan', $data);
    }

    public function tmpkat(){  
        $data['kategori'] = kategori::all();
        return view('tmpkategori', $data);
    }

    
    public function showDetail($id){
        $produk = produk::with('kategori')->findOrFail($id);
        return view('detail', compact('produk'));
    }


    public function showorder(){
        return view('order');
    }

    public function updateStok(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required|integer|min:1'
        ]);

        $produk = produk::findOrFail($id);

        if ($request->actionn == 'tambah') {
            $produk->stok -= $request->jumlah;
        } elseif ($request->action == 'kurangi' && $produk->stok >= $request->jumlah) {
            $produk->stok += $request->jumlah;
        } else {
            return back()->with('error', 'Stok tidak mencukupi untuk dikurangi.');
        }

        $produk->save();

        return view('order');
    }

    public function showShop(){
        $data['produk'] = produk::all();
        $data['total_produk'] = produk::count();
        return view('shop', $data);
    }

   
    
}




