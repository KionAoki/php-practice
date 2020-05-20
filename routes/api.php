<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::resource('userInfo', 'UserInfoController');

Route::get('userInfo', 'UserInfoController@index');
Route::get('userInfo/{id}', 'UserInfoController@show');
Route::post('userInfo', 'UserInfoController@store');
Route::put('userInfo/{id}', 'UserInfoController@update');
Route::delete('userInfo/{id}', 'UserInfoController@delete');

