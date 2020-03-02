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

Route::get('users','UserController@showUsers');
Route::get('addProfile','UserController@showProfiles');
Route::get('profiles','UserController@showUsers');
Route::get('showEdit/{id}','UserController@formEditUser')->name('showEdit');
Route::put('update/{id}','UserController@UpdateUser')->name('update');
Route::get('delete/{id}','UserController@deleteUser')->name('delete');

Route::get('allPost','UserController@showAllPost')->name('allPost');
Route::get('newPost','UserController@formNewPost')->name('newPost');
Route::post('addPost','UserController@addNewPost')->name('addPost');
Route::get('formEdit/{id}','UserController@formEditPost')->name('formEdit');
Route::put('editPost/{id}','UserController@updatePost')->name('editPost');
Route::get('deletePost/{id}','UserController@destroyPost')->name('deletePost');

