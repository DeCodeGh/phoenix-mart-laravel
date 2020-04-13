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
  Route::get('/', 'PagesController@dashboard')->name('dashboard');
  // categories
  Route::get('categories', 'CategoryController@index')->name('category.index');

  Route::group(['prefix' => 'category'], function () {

    // add new category
    Route::get('new', 'CategoryController@create')->name('category.create');
    Route::post('new', 'CategoryController@store')->name('category.store');

    // editing category
    Route::get('edit/{category}', 'CategoryController@edit')->name('category.edit');
    Route::patch('update/{category}', 'CategoryController@update')->name('category.update');

    //delete category
    Route::delete('delete/{category}', 'CategoryController@destroy')->name('category.delete');
  });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
