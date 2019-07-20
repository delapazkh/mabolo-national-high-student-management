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

Route::get('/', 'HomeController@index')->name('home'); // HTML view

Route::get('/users', 'UsersController@index')->name('index'); // HTML view
Route::get('/users/create', 'UsersController@create')->name('create'); // HTML view

Route::get('/roles', 'RolesController@index')->name('index'); // HTML view
Route::get('/roles/create', 'RolesController@create')->name('create'); // HTML view

Route::get('/forms', 'FormsController@index')->name('index'); // HTML view
Route::get('/forms/137', 'OneThreeSevenController@index')->name('index'); // HTML view
Route::get('/forms/enrollment', 'EnrollmentController@index')->name('index'); // HTML view

Route::get('/persons', 'PersonsController@persons')->name('persons'); // API call

Route::get ('/enrollment/create', 'EnrollmentController@create')->name('create');
Route::post('/enrollment/store', 'EnrollmentController@store')->name('store'); // API call

