<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/buat' , function () {
    return view('welcome');
});
Route::get('/', [UserController::class, 'login']);
Route::post('/auth', [UserController::class, 'authentication']);
Route::get('/register', [UserController::class, 'createRe']);
Route::post('/register/create', [UserController::class, 'addRe']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/tampilan', [UserController::class, 'adm']);
Route::get('/dumy_template', function () {
    return view('template');
});

// Route::get('/dasboard', function () {  
//     return view('dasboard');
// });

// Route::get('/dasboard', [Controller::class, 'dbb']);

Route::middleware('StatusLogin')->group(function () {
    Route::get('/dasboard', [ProdukController::class, 'db']);

    Route::get('/produk', [ProdukController::class, 'show']);
    Route::post('/produk',  [ProdukController::class, 'search']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/create', [ProdukController::class, 'add']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'delete']);
    
    Route::get('/user', [UserController::class, 'show']);
    Route::post('/user', [UserController::class, 'search']);
    Route::get('/user/create', [UserController::class,'create']);
    Route::post('/user/create', [UserController::class, 'add']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);
    
    Route::get('/kategori', [KategoriController::class, 'show']);
    Route::post('/kategori', [KategoriController::class, 'search']);
    Route::get('/kategori/create', [KategoriController::class, 'create']);
    Route::post('/kategori/create', [KategoriController::class, 'add']);
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
    Route::post('/kategori/update/{id}', [KategoriController::class, 'update']);
    Route::get('/tmpkategori', [ProdukController::class, 'tmpkat']);
    Route::get('/detailproduk/{id}', [ProdukController::class, 'showDetail'])->name('produk.detail');
    Route::get('/order', [ProdukController::class, 'showorder']);
    Route::get('/shop', [ProdukController::class, 'showShop']);
    
    Route::post('/cart/{id}/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::post('/cart/{id}/delete', [CartController::class, 'deleteCart'])->name('cart.delete');
    Route::get('/tampilan', [ProdukController::class, 'tmpshow']);

    Route::post('/shop', [ProdukController::class, 'searchShop']);
    Route::get('/profil', [UserController::class, 'showProfil']);
});

// Route untuk menampilkan halaman checkout
// Route::get('/order', [CheckoutController::class, 'index'])->name('checkout.index');

// // Route untuk menyimpan data pesanan
// Route::post('/order', [CheckoutController::class, 'store'])->name('checkout.store');
// Route::get('/dtOrder', [CheckoutController::class, 'showdtOrder']);
Route::post('/cart',  [CartController::class, 'search']);
Route::get('/order', [CheckoutController::class, 'index'])->name('checkout.index');

Route::post('/order', [CheckoutController::class, 'store'])->name('store');

Route::get('/history', [CheckoutController::class, 'showhistoryy']);
Route::post('/history/create', [CheckoutController::class, 'historyy']);
Route::get('/dataPenjualan', [CheckoutController::class, 'showorder']);
Route::get('/dataCart', [CartController::class, 'showcartdt']);











// Route::get('/tmpkategori', [ProdukController::class, 'tmpkattt']);
// Route::get('/tmpkategori', [ProdukController::class, 'tmpkatttt']);



