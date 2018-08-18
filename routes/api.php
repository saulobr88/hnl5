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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/','Api\ApiController@index')->name('api.index');
Route::get('/tops','Api\ApiController@tops')->name('api.tops');
Route::get('/news','Api\ApiController@news')->name('api.news');
Route::get('/bests','Api\ApiController@bests')->name('api.bests');
Route::get('/item/{id}','Api\ApiController@item')->name('api.item');
Route::get('/user/{id}','Api\ApiController@user')->name('api.user');


