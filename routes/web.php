<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/home', 'App\Http\Controllers\admin\HomeController@index')->name('admin.home.index');

Route::get('/product', 'App\Http\Controllers\admin\ProductController@index')->name('admin.product.index');
Route::post('/product', 'App\Http\Controllers\admin\ProductController@store')->name('admin.product.store');
Route::get('/product/{id}/edit', 'App\Http\Controllers\admin\ProductController@edit')->name('admin.product.edit');
Route::put('/product/{id}/edit', 'App\Http\Controllers\admin\ProductController@update')->name('admin.product.update');
Route::delete('/product/{id}/delete', 'App\Http\Controllers\admin\ProductController@delete')->name('admin.product.delete');


//Image route
Route::get('/image', 'App\Http\Controllers\admin\ImageController@index')->name('admin.image.index');
Route::post('/image', 'App\Http\Controllers\admin\ImageController@store')->name('admin.image.store');
Route::get('/image/{id}/edit', 'App\Http\Controllers\admin\ImageController@edit')->name('admin.image.edit');
Route::put('/image/{id}/edit', 'App\Http\Controllers\admin\ImageController@update')->name('admin.image.update');
Route::delete('/image/{id}/delete', 'App\Http\Controllers\admin\ImageController@delete')->name('admin.image.delete');


//Type route
Route::get('/type', 'App\Http\Controllers\admin\TypeController@index')->name('admin.type.index');
Route::post('/type', 'App\Http\Controllers\admin\TypeController@store')->name('admin.type.store');
Route::get('/type/{id}/edit', 'App\Http\Controllers\admin\TypeController@edit')->name('admin.type.edit');
Route::put('/type/{id}/edit', 'App\Http\Controllers\admin\TypeController@update')->name('admin.type.update');
Route::delete('/type/{id}/delete', 'App\Http\Controllers\admin\TypeController@delete')->name('admin.type.delete');


//Staff route
Route::get('/staff', 'App\Http\Controllers\admin\StaffController@index')->name('admin.staff.index');
Route::post('/staff', 'App\Http\Controllers\admin\StaffController@store')->name('admin.staff.store');
Route::get('/staff/{id}/edit', 'App\Http\Controllers\admin\StaffController@edit')->name('admin.staff.edit');
Route::put('/staff/{id}/edit', 'App\Http\Controllers\admin\StaffController@update')->name('admin.staff.update');
Route::delete('/staff/{id}/delete', 'App\Http\Controllers\admin\StaffController@delete')->name('admin.staff.delete');


//User route
Route::get('/user', 'App\Http\Controllers\admin\UserController@index')->name('admin.user.index');
Route::post('/user', 'App\Http\Controllers\admin\UserController@store')->name('admin.user.store');
Route::get('/user/{id}/edit', 'App\Http\Controllers\admin\UserController@edit')->name('admin.user.edit');
Route::put('/user/{id}/edit', 'App\Http\Controllers\admin\UserController@update')->name('admin.user.update');
Route::delete('/user/{id}/delete', 'App\Http\Controllers\admin\UserController@delete')->name('admin.user.delete');

//Customer route
Route::get('/customer', 'App\Http\Controllers\admin\CustomerController@index')->name('admin.customer.index');
Route::post('/customer', 'App\Http\Controllers\admin\CustomerController@store')->name('admin.customer.store');
Route::get('/customer/{id}/edit', 'App\Http\Controllers\admin\CustomerController@edit')->name('admin.customer.edit');
Route::put('/customer/{id}/edit', 'App\Http\Controllers\admin\CustomerController@update')->name('admin.customer.update');
Route::delete('/customer/{id}/delete', 'App\Http\Controllers\admin\CustomerController@delete')->name('admin.customer.delete');

//invoice route
Route::get('/invoice', 'App\Http\Controllers\admin\InvoiceController@index')->name('admin.invoice.index');
Route::post('/invoice', 'App\Http\Controllers\admin\InvoiceController@store')->name('admin.invoice.store');
Route::get('/invoice/{id}/edit', 'App\Http\Controllers\admin\InvoiceController@edit')->name('admin.invoice.edit');
Route::put('/invoice/{id}/edit', 'App\Http\Controllers\admin\InvoiceController@update')->name('admin.invoice.update');
Route::delete('/invoice/{id}/delete', 'App\Http\Controllers\admin\InvoiceController@delete')->name('admin.invoice.delete');

// route::get('/', [HomeController::class, 'index']);
// // home
// Route::get(
//     '/layouts',
//     'App\Http\Controllers\HomeController@index'
// )
//     ->name("layouts.app");
// // product
// Route::get(
//     '/products',
//     'App\Http\Controllers\ProductController@index'
// )
//     ->name("products.index");
// Route::get(
//     '/products/{id}',
//     'App\Http\Controllers\ProductController@show'
// )
//     ->name("products.show");
// // about
// Route::get(
//     '/about',
//     'App\Http\Controllers\AboutController@index'
// )
//     ->name("about.index");
// //testimonials
// Route::get(
//     '/testimonial',
//     'App\Http\Controllers\TestimonialsController@index'
// )
//     ->name("testimonial.index");
// // contact
// Route::get(
//     '/contact',
//     'App\Http\Controllers\ContactController@index'
// )
//     ->name("contact.index");
// //cart
// Route::get(
//     '/cart',
//     'App\Http\Controllers\CartController@index'
// )
//     ->name("cart.index");
// route::get(
//     '/cart/add/{id}',
//     'App\Http\Controllers\CartController@add'
// )
//     ->name("cart.add");
// route::get(
//     '/cart/delete',
//     'App\Http\Controllers\CartController@delete'
// )
//     ->name("cart.delete");
// route::middleware(['auth'])->group(function () {
//     route::get(
//         '/cart/purchase',
//         'App\Http\Controllers\CartController@purchase'
//     )
//         ->name("cart.purchase");
// });
// // blog
// Route::get(
//     '/blog',
//     'App\Http\Controllers\BlogController@index'
// )
//     ->name("blog.index");

// // feature
// Route::get(
//     '/feature',
//     'App\Http\Controllers\FeatureController@index'
// )
//     ->name("feature.index");

// // <admin></admin>
// Route::get(
//     '/admin',
//     'App\Http\Controllers\Admin\AdminHomeController@index'
// )
//     ->name("admin.home.index");
// // adminProduct
// Route::get(
//     '/admin/product',
//     'App\Http\Controllers\Admin\AdminProductController@index'
// )
//     ->name("admin.product.index");
// Route::post(
//     "/admin/product/store",
//     "App\Http\Controllers\Admin\AdminProductController@store"
// )
//     ->name("admin.product.store");
// Route::delete(
//     '/admin/products/{id}/delete',
//     'App\Http\Controllers\Admin\AdminProductController@delete'
// )
//     ->name("admin.product.delete");
// Route::get(
//     '/admin/products/{id}/edit',
//     'App\Http\Controllers\Admin\AdminProductController@edit'
// )
//     ->name("admin.product.edit");
// Route::put(
//     '/admin/products/{id}/update',
//     'App\Http\Controllers\Admin\AdminProductController@update'
// )
//     ->name("admin.product.update");
// // adminProductType
// Route::get(
//     '/admin/productType',
//     'App\Http\Controllers\Admin\AdminProductTypeController@index'
// )
//     ->name("admin.type.index");
// Route::post(
//     "/admin/productType/store",
//     "App\Http\Controllers\Admin\AdminProductTypeController@store"
// )
//     ->name("admin.type.store");
// Route::delete(
//     '/admin/productTypes/{id}/delete',
//     'App\Http\Controllers\Admin\AdminProductTypeController@delete'
// )
//     ->name("admin.type.delete");
// Route::get(
//     '/admin/productTypes/{id}/edit',
//     'App\Http\Controllers\Admin\AdminProductTypeController@edit'
// )
//     ->name("admin.type.edit");
// Route::put(
//     '/admin/productTypes/{id}/update',
//     'App\Http\Controllers\Admin\AdminProductTypeController@update'
// )
//     ->name("admin.type.update");
// // adminProductImage
// Route::get(
//     '/admin/productImage',
//     'App\Http\Controllers\Admin\AdminImageController@index'
// )
//     ->name("admin.image.index");
// Route::post(
//     "/admin/productImage/store",
//     "App\Http\Controllers\Admin\AdminImageController@store"
// )
//     ->name("admin.image.store");
// Route::delete(
//     '/admin/productImages/{id}/delete',
//     'App\Http\Controllers\Admin\AdminImageController@delete'
// )
//     ->name("admin.image.delete");
// Route::get(
//     '/admin/productImages/{id}/edit',
//     'App\Http\Controllers\Admin\AdminImageController@edit'
// )
//     ->name("admin.image.edit");
// Route::put(
//     '/admin/productImages/{id}/update',
//     'App\Http\Controllers\Admin\AdminImageController@update'
// )
//     ->name("admin.image.update");

// // adminUser
// Route::get(
//     '/admin/user',
//     'App\Http\Controllers\Admin\AdminUserController@index'
// )
//     ->name("admin.user.index");
// Route::post(
//     "/admin/user/store",
//     "App\Http\Controllers\Admin\AdminUserController@store"
// )
//     ->name("admin.user.store");
// Route::delete(
//     '/admin/user/{id}/delete',
//     'App\Http\Controllers\Admin\AdminUserController@delete'
// )
//     ->name("admin.user.delete");
// Route::get(
//     '/admin/user/{id}/edit',
//     'App\Http\Controllers\Admin\AdminUserController@edit'
// )
//     ->name("admin.user.edit");
// Route::put(
//     '/admin/user/{id}/update',
//     'App\Http\Controllers\Admin\AdminUserController@update'
// )
//     ->name("admin.user.update");



Auth::routes();
