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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/category', 'PagesController@category')->name('category');
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/product', 'ProductController@show')->name('product.single');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'PagesController@dashboard')->name('dashboad');
});
