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

Route::view('/', 'homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/duas/trash', 'DuaController@trash')->name('duas.trash');
Route::get('/duas/trash/{id}/restore', 'DuaController@restore')->name('duas.restore');
Route::get('/duas/trash/{id}/permanent_delete', 'DuaController@permanentDelete')->name('duas.permanent_delete');


// duas route
Route::resource('duas', 'DuaController');

// admin routes


Route::get('/admin/duas', 'AdminController@duas')->name('admin.duas');

Route::get('/admin/index', 'AdminController@index')->name('admin');


