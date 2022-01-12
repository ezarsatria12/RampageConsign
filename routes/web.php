<?php


use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;



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

Route::get('/', function () {
    return view('page.home');
});
Route::get('/shop', function () {
    return view('page.shop');
});

Route::get('/login', function () {
    return view('page.authuser.login');
});
Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/order', function () {
    return view('profile.order');
});


Route::get('/viewproduk', function () {
    return view('viewproduk');
});
Route::get('/barang', function () {
    return view('page.viewproduk');
});

Route::get('signup', [UserController::class, 'index']);
Route::post('signup', [UserController::class, 'store']);

/*resource*/
Route::resource('/profile/produk', ProdukController::class);