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

  // Admin/Products
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

  Route::put('/products/{id}/update', [
    'uses' => 'Admin\ProductController@update',
    'as' => 'product.update'
  ]);

  Route::get('/products/{id}/delete', [
    'uses' => 'Admin\ProductController@destroy',
    'as' => 'product.delete'
  ]);


  // Admin/Brands
  Route::get('/brands', [
    'uses' => 'Admin\BrandController@index',
    'as' => 'brand.all'
  ]);

  Route::post('/brands', [
    'uses' => 'Admin\BrandController@store',
    'as' => 'brand.store'
  ]);

  Route::get('/brands/create', [
    'uses' => 'Admin\BrandController@create',
    'as' => 'brand.create'
  ]);

  Route::get('/brands/{id}', [
    'uses' => 'Admin\BrandController@show',
    'as' => 'brand.show'
  ]);

  Route::get('/brands/{id}/edit', [
    'uses' => 'Admin\BrandController@edit',
    'as' => 'brand.edit'
  ]);

  Route::put('/brands/{id}/update', [
    'uses' => 'Admin\BrandController@update',
    'as' => 'brand.update'
  ]);

  Route::get('/brands/{id}/delete', [
    'uses' => 'Admin\BrandController@destroy',
    'as' => 'brand.delete'
  ]);
});
