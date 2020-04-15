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
Route::get('/category/{category}', 'PagesController@category')->name('category');
Route::get('/products', 'PagesController@products')->name('products');
Route::get('/product/{product}', 'ProductController@show')->name('product.view');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
  Route::get('/', 'PagesController@dashboard')->name('dashboard');
  // categories
  Route::get('categories', 'CategoryController@index')->name('category.index');
  Route::get('subcategories', 'SubCategoryController@index')->name('subcategory.index');
  Route::get('products', 'ProductController@index')->name('product.index');

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

  Route::group(['prefix' => 'subcategory'], function () {

    // add new category
    Route::get('new', 'SubCategoryController@create')->name('subcategory.create');
    Route::post('new', 'SubCategoryController@store')->name('subcategory.store');

    // editing category
    Route::get('edit/{subcategory}', 'SubCategoryController@edit')->name('subcategory.edit');
    Route::patch('update/{subcategory}', 'SubCategoryController@update')->name('subcategory.update');

    //delete category
    Route::delete('delete/{subcategory}', 'SubCategoryController@destroy')->name('subcategory.delete');
  });

  Route::group(['prefix' => 'product'], function () {

    // add new product
    Route::get('new', 'productController@create')->name('product.create');
    Route::post('new', 'productController@store')->name('product.store');

    // editing product
    Route::get('edit/{product}', 'productController@edit')->name('product.edit');

    Route::patch('update/{product}', 'productController@update')->name('product.update');

    //delete product
    Route::delete('delete/{product}', 'productController@destroy')->name('product.delete');
  });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
