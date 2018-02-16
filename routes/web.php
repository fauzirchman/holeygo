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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/popular', 'HomeController@popular')->name('popular');
Route::get('/group', 'HomeController@group')->name('group');
Route::get('/store', 'HomeController@store')->name('store');

Route::get('/users/profile', 'UsersController@profile')->name('users.profile');

Route::resource('admin/users', 'Admin\UsersController');
