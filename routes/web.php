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

// use App\User;
// Route::view('vuewelcome', 'vue.welcome');
// Route::view('vuetags', 'vue.tags');

Route::view('/allduas', 'homepage')->name('allduas');
Route::view('/', 'welcome');

Auth::routes();

Route::resource('users', 'UsersController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/duas/trash', 'DuaController@trash')->name('duas.trash');
Route::get('/duas/trash/{id}/restore', 'DuaController@restore')->name('duas.restore');
Route::get('/duas/trash/{id}/permanent_delete', 'DuaController@permanentDelete')->name('duas.permanent_delete');


// duas route
Route::resource('duas', 'DuaController');


// admin routes


Route::get('/admin/duas', 'AdminController@duas')->name('admin.duas');

Route::get('/admin/index', 'AdminController@index')->name('admin');

Route::resource('tags','TagController');

Route::get('/duabytag/{tag}', 'TagController@dua_by_tag')->name('duatag');

Route::get('/search', 'DuaController@search')->name('search');






