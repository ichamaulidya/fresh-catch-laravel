<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\FishfarmController;
use App\Http\Controllers\DetailFishfarmController;
use App\Http\Controllers\DetailFishinfoController;
use App\Http\Controllers\FishinfoController;
use App\Http\Controllers\FishmarketController;
use App\Http\Controllers\DetailFishmarketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CreateNewController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminController;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public routes
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/fish farm', [FishfarmController::class, 'fishfarm']);
Route::get('/fish-farm/{id}', [DetailFishfarmController::class, 'detailFishfarm']);

Route::get('/fishInfo', [FishinfoController::class, 'fishinfo']);
Route::get('/fishinfo/{id}', [DetailFishinfoController::class, 'detailFishinfo']);

Route::get('/fishMarket', [FishmarketController::class, 'fishmarket']);
Route::get('/fishmarket/{id}', [DetailFishmarketController::class, 'detailFishmarket']);

//login
Route::get('/login', [
    LoginController::class, 'login'
]) ->name('login');

Route::post('/signin',[
    LoginController::class, 'signin'
]);

Route::group(['middleware' => 'check.user.session'], function () {
    // Define routes that require the user session to be set here

    
    // Rute untuk menampilkan keranjang belanja
    Route::get('/cart', [CartController::class, 'Cart'])->name('cart');

    // Rute untuk menambahkan produk ke keranjang
    Route::post('/cart/store', [CartController::class, 'store_cart'])->name('cart.store');

    // rute untuk menambah keranjang ke transaksi 
    Route::post('/cart/transaksi', [TransaksiController::class, 'toTransaksi'])->name('cart.transaksi');

    Route::put('/update-cart-quantity',  [CartController::class, 'updateCartQuantity'])->name('update-cart-quantity');

    // Rute untuk menghapus item dari keranjang
    Route::delete('/cart/delete', [CartController::class, 'deleteCart'])->name('cart.delete');

    Route::get('/profil', [ProfilController::class, 'Profil'])->name('profil');
    Route::get('/editprofile/{id}', [ProfilController::class, 'editprofil']);

    


    // Route::post('/add-to-cart/{productId}', [CartController::class, 'addToCart'])
    //     ->name('cart.addToCart');

        //chat
        Route::get('/chat', [ChatController::class, 'chat']);
        Route::post('/postchat', [ChatController::class, 'postchat']);



});

Route::get('/logout',[
    LoginController::class, 'logout'
])->name('logout');

//cretae new
Route::get('/createNew', [
    CreateNewController::class, 'createNew'
]);
Route::post('/save', [CreateNewController::class, 'save']);


// Admin routes
Route::group(['middleware' => 'check.user.session'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashbord');
    //fishinfo
    Route::get('/fishinfo', [AdminController::class, 'fishinfo']) ->name('admin.fishinfo');
    Route::put('/admin/updatefishinfo', [AdminController::class, 'updateFishInfo'])->name('admin.updatefishinfo');
    Route::delete('/deletefishinfo/{id}', [AdminController::class, 'deletefishinfo'])->name('deleteFishinfo');
    Route::post('/addarticle', [AdminController::class, 'addarticle']);
    //fishfarm
    Route::get('/fishfarm', [AdminController::class, 'fishfarm'])->name('admin.fishfarm');
    Route::put('/admin/updatefishfarm', [AdminController::class, 'updateFishFarm'])->name('admin.updateFishFarm');
    Route::delete('/deletefishfarm/{id}', [AdminController::class, 'deletefishfarm'])->name('deleteFishfarm');
    Route::post('/addfarm', [AdminController::class, 'addfarm']);
    //produk
    Route::get('/product', [AdminController::class, 'product'])->name('admin.product');
    Route::put('/admin/updateProduk', [AdminController::class, 'updateProduk'])->name('admin.updateproduct');
    Route::delete('/deletefishproduk/{id}', [AdminController::class, 'deleteproduk'])->name('deleteProduct');
    Route::post('/addproduk', [AdminController::class, 'addproduk']);
    //order    
    Route::get('/order', [AdminController::class, 'order'])->name('admin.order');
    Route::get('/waitingPayment', [AdminController::class, 'waitingPayment']);
    Route::delete('/deleteOrder/{id}', [AdminController::class, 'deleteOrder'])->name('deleteOrder');
    Route::get('/packing', [AdminController::class, 'packing']);
    Route::get('/sent', [AdminController::class, 'sent']);
    Route::get('/done', [AdminController::class, 'done']);
    Route::get('/chatadmin', [AdminController::class, 'chat']);
    // Add other admin routes as needed
});