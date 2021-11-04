<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index','Admin\AdminController@index')->name('index');

Route::get('/product/index','Admin\ProductController@index')->name('product');

Route::get('/product_type/index','Admin\Product_typeController@index')->name('type');

Route::get('/user/index','Admin\UserController@index')->name('user');

Route::get('/header/index','Admin\HeaderController@index')->name('header');

Route::get('/body/index','Admin\BodyController@index')->name('body');


Auth::routes();
Route::get('/about','HomeController@about');
Route::get('/home', 'HomeController@index')->name('home');
