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

Route::get('/users', 'UsersController@index')->name('index');
Route::get('/users/create', 'UsersController@create')->name('create');

Route::get('/roles', 'RolesController@index')->name('index');
Route::get('/roles/create', 'RolesController@create')->name('create');

Route::get('/forms', 'FormsController@index')->name('index');
Route::get('/Students', 'StudentListController@index')->name('index');

Route::get('/enrollment', 'EnrollmentController@index')->name('index');
Route::get('/enrollment/create', 'EnrollmentController@create')->name('create');
Route::post('/enrollment/store', 'EnrollmentController@store')->name('store');
