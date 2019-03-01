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
Route::get('/login', function () {
    return view('login');
});
Route::group(['middleware' => 'auth'],function(){
    Route::get('/new_customer', 'CustomerController@index');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('customer', 'CustomerController');
Route::resource('products' ,'ProductsController');

