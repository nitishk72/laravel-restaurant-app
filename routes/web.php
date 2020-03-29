<?php

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
Auth::routes();

// For Every User
Route::view('/', 'welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductsController@products')->name('products');
Route::get('/product/{id}', 'ProductsController@product')->name('product');

// For Authenticated User only
Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('/cart', 'UserController@cart')->name('cart');
Route::get('/orders', 'UserController@orders')->name('orders');
// Route::get('/settings', 'UserController@settings')->name('settings');

Route::view('/admin/login', 'admin.login');

// For Authenticated Admin only
Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@create');
Route::get('/admin/delete/{id}', 'AdminController@remove')->name('delete');
Route::get('/admin/logout', 'AdminController@logout');
// Route::get('/admin/settings', 'AdminController@settings');
// Route::get('/admin/products', 'AdminController@products');
