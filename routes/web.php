<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/hh', function () {
//     return view('welcome')->name('homee');
// });

Auth::routes();

Route::get('/dashboard.admin', [App\Http\Controllers\Dashboard\AdminController::class, 'index'])->name('dashboard.admin');
Route::get('/dashboard.user', [App\Http\Controllers\Dashboard\UserController::class, 'index'])->name('dashboard.user');


Route::get('type-product', [App\Http\Controllers\TypeProductController::class, 'index'])->name('type.product');
Route::get('type-product-show/{id}', [App\Http\Controllers\TypeProductController::class, 'show'])->name('type-product.show');
Route::post('type-product-store', [App\Http\Controllers\TypeProductController::class, 'store'])->name('store.type-product');
Route::get('type-product-edit/{id}', [App\Http\Controllers\TypeProductController::class, 'edit'])->name('edit.type-product');
Route::put('type-product-update', [App\Http\Controllers\TypeProductController::class, 'update'])->name('update.type-product');
Route::get('update-status-type-product', [App\Http\Controllers\TypeProductController::class, 'updatestatus'])->name('updatestatus.type-product');

//orderlist

Route::get('/product-list', [App\Http\Controllers\Dashboard\AdminController::class, 'productList'])->name('products.list');

//Admin
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::get('/admin-show', [App\Http\Controllers\ProductController::class, 'show'])->name('admin.show');
Route::post('/admin-update', [App\Http\Controllers\ProductController::class, 'update'])->name('admin.update');


Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('ordero');
Route::get('/order.info', [App\Http\Controllers\OrderInfoController::class, 'index'])->name('order.info');

Route::get('/add-product', [App\Http\Controllers\AdminController::class, 'create'])->name('add.product');
// Route::get('/list-product', [App\Http\Controllers\ProductController::class, 'index'])->name('list.product');


//Admin monthly,yearly
Route::get('/monthly', [App\Http\Controllers\MonthlyController::class, 'index'])->name('monthly.admin');
Route::get('/yearly', [App\Http\Controllers\YearlyController::class, 'index'])->name('yearly.admin');



//tracking
Route::get('/tracking', [App\Http\Controllers\TrackingController::class, 'index'])->name('tracking');


//bill
Route::get('/bill', [App\Http\Controllers\BillController::class, 'index'])->name('bill');



//address
Route::get('address', [App\Http\Controllers\AddressController::class, 'index'])->name('address');
Route::get('address-show/{id}', [App\Http\Controllers\AddressController::class, 'show'])->name('show.address');
Route::post('address-store', [App\Http\Controllers\AddressController::class, 'store'])->name('store.address');
Route::get('address-edit/{id}', [App\Http\Controllers\AddressController::class, 'edit'])->name('edit.address');
Route::put('address-update', [App\Http\Controllers\AddressController::class, 'update'])->name('update.address');





//user

Route::get('/home', [App\Http\Controllers\ProductController::class, 'product'])->name('products');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.user');
Route::get('/address-user', [App\Http\Controllers\AddressUserController::class, 'index'])->name('address.user');