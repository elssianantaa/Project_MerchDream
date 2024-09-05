<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    //
    public function show(){
        $data['kategori'] = kategori::orderBy('nm_kategori', 'desc')->get();
        return view('kategori', $data);
    }

    public function search(Request $request){
        $data['kategori'] = kategori::where('nm_kategori', $request->cari)->get();
        $data['total_kategori'] = $data['kategori']->count();
        return view('kategori', $data);
    }

    public function create(){
        $data['kategoris'] = kategori::get();
        return view('kategoriCreate', $data);
    }

    public function add(Request $request){
        $validateData = $request->validate([
            'nm_kategori' =>['required']
        ]);

        $fileName = '';

        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $produk = kategori::create([
            'nm_kategori' => $request->nm_kategori
        ]);

        return redirect('kategori');
    }

    public function delete(Request $request){
        $user = kategori::find($request->id);
        $delete = kategori::where('id', $request->id)->delete();
        if ($delete) {
            if ($user->foto) {
                Storage::delete('foto/' .$user->foto);
            }
        }

        return redirect('kategori');
    }
    
    public function edit(Request $request){
        $data['kategori'] = kategori::find($request->id);
        return view('kategoriUpdate', $data);
    }

    public function update(Request $request){
        $update = kategori::where('id', $request->id)->update([
           'nm_kategori' => $request->nm_kategori
        ]);

        $produk = kategori::findOrFail($request->id);

        if ($produk->foto) {
            Storage::delete('foto' . $produk->foto);
        }

        return redirect('kategori');

    }

}
