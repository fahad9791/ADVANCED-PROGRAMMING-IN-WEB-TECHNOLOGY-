<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesAPIController;
use App\Http\Controllers\ProductAPIController;
use App\Http\Controllers\ShopAPIController;

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

Route::get('/registration/view', [PagesAPIController::class,'view']);
Route::post('/registration/add', [PagesAPIController::class,'add']);
Route::post('/registration/update/{id}', [PagesAPIController::class,'update']);
Route::post('/registration/delete/{id}', [PagesAPIController::class,'delete']);

Route::post('/login', [PagesAPIController::class,'login']);

Route::get('/product/view', [ProductAPIController::class,'view']);
Route::post('/product/add', [ProductAPIController::class,'add']);
Route::post('/product/update/{id}', [ProductAPIController::class,'update']);
Route::post('/product/delete/{id}', [ProductAPIController::class,'delete']);

Route::get('/customer/view', [ShopAPIController::class,'view']);
Route::post('/customer/add', [ShopAPIController::class,'add']);
Route::post('/customer/update/{id}', [ShopAPIController::class,'update']);
Route::post('/customer/delete/{id}', [ShopAPIController::class,'delete']);

Route::post('/send-mail', [PagesAPIController::class, 'mail']);
