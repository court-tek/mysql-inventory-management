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
  // Route::get('/', [
  //   'uses' => 'Admin\ProductController@index',
  //   'as' => 'product.all'
  // ]);

  Route::get('/products', [
    'uses' => 'Admin\ProductController@index',
    'as' => 'product.all'
  ]);

  Route::post('/products', [
    'uses' => 'Admin\ProductController@store',
    'as' => 'product.store'
  ]);

  Route::get('/products/create', [
    'uses' => 'Admin\ProductController@create',
    'as' => 'product.create'
  ]);

  Route::get('/products/{id}', [
    'uses' => 'Admin\ProductController@show',
    'as' => 'product.show'
  ]);

  Route::get('/products/{id}/edit', [
    'uses' => 'Admin\ProductController@edit',
    'as' => 'product.edit'
  ]);

  Route::get('/products/{id}/update', [
    'uses' => 'Admin\ProductController@update'
  ]);

  Route::get('/products/{id}/delete', [
    'uses' => 'Admin\ProductController@delete'
  ]);
});
