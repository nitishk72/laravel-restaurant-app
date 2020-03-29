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
Route::post('/addCart', 'ProductsController@addCart')->name('addCart');
Route::get('/product/{id}', 'ProductsController@product')->name('product');
Route::get('/orders/', 'ProductsController@orderHistory')->name('orderHistory');
Route::get('/orders/{id}', 'ProductsController@viewOrder')->name('viewOrder');

// For Authenticated User only
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/cart', 'UserController@cart')->name('cart');
Route::post('/orders', 'UserController@doOrders')->name('orders');
// Route::get('/settings', 'UserController@settings')->name('settings');

Route::view('/admin/login', 'admin.login');

// For Authenticated Admin only
Route::get('/admin', 'AdminController@index');

Route::get('/admin/add', 'AdminController@add')->name('addProducts');
Route::post('/admin/add', 'AdminController@create');

Route::get('/admin/viewAdminOrders', 'AdminController@viewOrders')->name('viewAdminOrders');
Route::get('/admin/approveOrder/{id}', 'AdminController@approveOrder')->name('approveOrder');
Route::get('/admin/cancelOrder/{id}', 'AdminController@cancelOrder')->name('cancelOrder');


Route::get('/admin/view/{id}', 'AdminController@view')->name('view');

Route::get('/admin/delete/{id}', 'AdminController@remove')->name('delete');

Route::get('/admin/edit/{id}', 'AdminController@update')->name('edit');
Route::post('/admin/edit/{id}', 'AdminController@doUpdate')->name('doUpdate');

Route::get('/admin/logout', 'AdminController@logout');
// Route::get('/admin/settings', 'AdminController@settings');
// Route::get('/admin/products', 'AdminController@products');
