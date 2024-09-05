<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function authentication(Request $request){
        $validateData = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (Auth::attempt($validateData)) {
            // return redirect('produk');
            if (Auth::user()->levels_id == 1) {
                return redirect('/dasboard');
            }else{
                return redirect('/tampilan');
            }
        }

        return redirect()->back()->with('StatusLogin', 'Login anda gagal');
    }

    public function createRe(){
        return view('register');
    }

    public function addRe(Request $request){
        $validateData = $request->validate([
            'name' =>['required', 'min:3'],
            'email' =>['required', 'email'],
            'password' =>['required'],
            'foto' => 'image'
        ]);

        $fileName = '';

        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : DB ::raw('password'),
            'levels_id' => $request->levels_id ?? 2,
            'foto' => $fileName
        ]);

        return redirect('/');
    }
    public function adm(){
        return view('tampilan');
    }


    public function show(){
        $data['user'] = User::orderby('name', 'desc')->get();
        $data['total_user'] = User::count();
        return view('user', $data);
    }

    public function search(Request $request)
    {
        $data['user'] = User::where('name', $request->cari)->orWhere('email', $request->cari)->get();
        $data['total_user'] = $data['user']->count();
        return view('user', $data);
    }

    public function create()
    {
        $data['levels'] = Level::all(); 
        return view('userCreate', $data);
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'name' =>['required', 'min:3'],
            'email' =>['required', 'email'],
            'password' =>['required'],
            'levels_id' => 'required',
            'foto' => 'image'
        ]);

        $fileName = '';

        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('public/', $fileName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : DB ::raw('password'),
            'levels_id' => $request->levels_id,
            'foto' => $fileName
        ]);

        
        return redirect('user');
    }

    public function delete(Request $request){
        $user = User::find($request->id);
        $delete = User::where('id', $request->id)->delete();

        return redirect('user');
    }

    public function edit(Request $request){
        $data['user'] = User::find($request->id);
        return view('userUpdate', $data);
    }

    public function update(Request $request){
        $fileName = '';

        if ($request->file('foto')) {
            $extFile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." . $extFile;
            $request->file('foto')->storeAs('public/'.$fileName);
        }


       $update = User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : DB::raw('password'),
            'foto' => $fileName,
        ]);
        

        $produk = User::findOrFail($request->id);


        if ($produk->foto) {
            Storage::delete('foto' . $produk->foto);
        }

        return redirect('user');
    }


    public function showProfil(){
        return view('profil');
    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
