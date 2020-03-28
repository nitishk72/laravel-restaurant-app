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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductsController@products')->name('products');
Route::get('/product/:id', 'ProductsController@product')->name('product');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/settings', 'UserController@settings')->name('settings');

Route::get('/admin', 'AdminController@index');
Route::view('/admin/login', 'admin.login');
Route::get('/admin/logout', 'AdminController@logout');
Route::get('/admin/settings', 'AdminController@settings');
Route::get('/admin/products', 'AdminController@products');
