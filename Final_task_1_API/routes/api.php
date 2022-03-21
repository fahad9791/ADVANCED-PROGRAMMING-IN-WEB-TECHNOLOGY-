<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesAPIController;
use App\Http\Controllers\DepartmentsAPIController;

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
Route::get('/course/view', [CoursesAPIController::class,'view']);
Route::post('/course/add', [CoursesAPIController::class,'add']);
Route::post('/course/update/{id}', [CoursesAPIController::class,'update']);
Route::post('/course/delete/{id}', [CoursesAPIController::class,'delete']);

Route::get('/department/view', [DepartmentsAPIController::class,'view']);
Route::post('/department/add', [DepartmentsAPIController::class,'add']);
Route::post('/department/update/{id}', [DepartmentsAPIController::class,'update']);
Route::post('/department/delete/{id}', [DepartmentsAPIController::class,'delete']);

Route::post('/department/{id}', [DepartmentsAPIController::class,'details']);



