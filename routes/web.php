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

Route::group(['prefix' => 'admin'], function() {
  Route::get('/products', [
    'uses' => 'Admin\ProductController@index',
    'as' => 'product.all'
  ]);
  
  Route::post('/products', [
    'uses' => 'Admin\ProductController@store'
  ]);

  Route::get('/products/create', [
    'uses' => 'Admin\ProductController@create'
  ]);

  Route::get('/products/{id}', [
    'uses' => 'Admin\ProductController@show'
  ]);

  Route::get('/products/{id}/edit', [
    'uses' => 'Admin\ProductController@edit'
  ]);

  Route::get('/products/{id}/edit', [
    'uses' => 'Admin\ProductController@update'
  ]);

  Route::get('/products/{id}/delete', [
    'uses' => 'Admin\ProductController@delete'
  ]);
});
