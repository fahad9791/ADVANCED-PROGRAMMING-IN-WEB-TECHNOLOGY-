<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/view', [PagesController::class, 'view'])->name('view');
Route::get('/edit/{id}', [PagesController::class, 'edit'])->name('edit');
Route::get('/create', [PagesController::class, 'create'])->name('create');
Route::get('/delete/{id}', [PagesController::class, 'delete'])->name('delete');

Route::post('/create', [PagesController::class, 'createsubmit'])->name('create.submit');
Route::post('/edit', [PagesController::class, 'editsubmit'])->name('edit.submit');
Route::post('/delete', [PagesController::class, 'deletesubmit'])->name('delete.submit');