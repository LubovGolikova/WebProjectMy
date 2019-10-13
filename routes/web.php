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

Route::get('/', "HomeController@index");
Route::get('/shop', "ShopController@index");
Route::get('/flower/{id}', "ShopController@showProduct");
Route::post('/add-box', "BoxController@addFlower");
Route::post('/remove-flower', "BoxController@removeFlower");
Route::post('/remove-all', "BoxController@removeAll");
Auth::routes();


Route::get('/admin', "Admin\AdminController@index");
Route::resource('/admin/flower', "Admin\FlowerController");
