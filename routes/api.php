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


Route::get('/duas' , 'ApiController@getAllDua');
Route::get('/duas/{id}' , 'ApiController@getOneDua');

Route::get('/all', 'ApiController@all_data');
Route::get('/storedata', 'ApiController@store_data');
Route::get('/downloaddata', 'ApiController@download_data');


Route::get('/tags' , 'ApiController@getAllTag');
Route::get('/tags/{id}' , 'ApiController@getOneTag');
Route::post('/tags/store', 'ApiController@storeTag');
Route::patch('/tags/{id}', 'ApiController@updateTag');
Route::delete('/tags/{id}', 'ApiController@deleteTag');
Route::get('/duas/{id}' , 'ApiController@getOneDua');




