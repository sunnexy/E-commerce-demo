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

Route::get('/', 'HomeController@base');
Route::get('/add/{id}/{name}/{price}', 'HomeController@add')->where('id', '[0-9]+')->name('add');
Route::get('/cart', 'HomeController@cart');
Route::get('/cart_clear', 'HomeController@clear');
Route::post('/submit', 'HomeController@submit');
Route::get('/contact', 'HomeController@contact');

