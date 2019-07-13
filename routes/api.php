<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('articles', 'ArticlesController@index'); // list all the articles
Route::get('article/{id}','ArticlesController@show'); //get a single article using the article id
Route::post('articles','ArticlesController@store');// save a new article based on the user request

