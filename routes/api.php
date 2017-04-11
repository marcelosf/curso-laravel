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

Route::group(['middleware' => 'cors', 'as' => 'api.'], function(){

    Route::post('/access_token', 'Api\AuthController@accessToken')->name('access_token');
    Route::post('/refresh_token', 'Api\AuthController@refreshToken')->name('refresh_token');


    Route::group(['middleware' => 'auth:api'], function(){

        Route::post('logout', 'Api\AuthController@logout')->middleware('auth:api');
        Route::get('hello-world', function(Request $request){

            return response()->json(['message' => 'Hello world']);

        })->middleware('auth:api')->name('user');

    });



    Route::get('/user', function (){

        $user = Auth::guard('api')->user();
        return $user;

    })->middleware('auth:api');

});

