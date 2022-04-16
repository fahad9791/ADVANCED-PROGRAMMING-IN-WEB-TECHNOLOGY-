<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});
Route::get('/registration', [PagesController::class, 'registration'])->name('registration');
Route::get('/login', [PagesController::class, 'login'])->name('login');

Route::get('/dashboard', [ShopController::class, 'dashboard'])->name('dashboard');
Route::get('/view_profile', [ShopController::class, 'view_profile'])->name('view_profile');
Route::get('/edit_profile', [ShopController::class, 'edit_profile'])->name('edit_profile');
Route::get('/change_password', [ShopController::class, 'change_password'])->name('change_password');
Route::get('/change_picture', [ShopController::class, 'change_picture'])->name('change_picture');
Route::get('/order', [ShopController::class, 'order'])->name('order');

Route::get('/view_product', [ProductController::class, 'view_product'])->name('view_product');
Route::get('/add_product', [ProductController::class, 'add_product'])->name('add_product');
Route::get('/update_product', [ProductController::class, 'update_product'])->name('update_product');
Route::get('/product_details_update', [ProductController::class, 'product_details_update'])->name('product_details_update');
Route::get('/delete_product', [ProductController::class, 'delete_product'])->name('delete_product');
Route::get('/product_details_delete', [ProductController::class, 'product_details_delete'])->name('product_details_delete');


Route::get('/logout', [PagesController::class, 'logout'])->name('logout');

Route::post('/registration', [PagesController::class, 'registrationsubmit'])->name('registration.submit');
Route::post('/login', [PagesController::class, 'loginsubmit'])->name('login.submit');
Route::post('/edit_profile', [ShopController::class, 'editsubmit'])->name('edit.submit');
Route::post('/change_password', [ShopController::class, 'change_passwordsubmit'])->name('change_password.submit');
Route::post('/change_picture', [ShopController::class, 'change_picturesubmit'])->name('change_picture.submit');
Route::post('/add_product', [ProductController::class, 'add_productsubmit'])->name('add_product.submit');
Route::post('/product_details_update', [ProductController::class, 'product_details_updatesubmit'])->name('product_details_update.submit');
Route::post('/product_details_delete', [ProductController::class, 'product_details_deletesubmit'])->name('product_details_delete.submit');



Route::get('/send-mail', [PagesController::class, 'mail'])->name('mail');

// Route::get('send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from fahad',
//         'body' => 'Hello '
//     ];
   
//     Mail::to('shahriarfarabi1998@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
//     echo "Mail send";
// });
