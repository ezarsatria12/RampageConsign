<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Img_assetController;
use App\Http\Controllers\ProdukContoller;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('show', [Img_assetController::class, 'show']);
Route::resource('/produk', ProdukContoller::class)->except('create', 'edit');
Route::resource('/user', UserController::class)->except('create', 'edit');