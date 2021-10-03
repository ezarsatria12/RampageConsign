<?php

use App\Http\Controllers\img;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
use App\Http\Controllers\imgController;
use app\Http\imgControllers;

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

Route::get('/', [imgController::class,'show']);

Route::get('/shop', function () {
    return view('shop');
});
Route::get('/signup', function () {
    return view('signup');
});
