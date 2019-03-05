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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'UserController@index')->name('admin');

Route::get('/admin/list_user', 'UserController@list_user')->name('ahihi');

Route::get('/admin/add_user', 'UserController@get_add_user')->name('add_user');

Route::get('/admin/edit_user/{id}', 'UserController@getUserToEdit')->name('/admin/edit_user/');

Route::get('/admin/delete_user/{id}', 'UserController@delete_user')->name('delete');

Route::post('/add_user', 'UserController@add_user')->name('add_user');