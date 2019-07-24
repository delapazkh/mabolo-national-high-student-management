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

// Users Module
Route::get('/users', 'UsersController@index')->name('users-index'); // HTML view
Route::get('/users/create', 'UsersController@create')->name('users-create'); // HTML view

// Roles Module
Route::get('/roles', 'RolesController@index')->name('roles-index'); // HTML view
Route::get('/roles/create', 'RolesController@create')->name('roles-create'); // HTML view

// Forms Module
Route::get ('/forms', 'FormsController@index')->name('forms-index'); // HTML view
	
	// 137 Form Module
	Route::get ('/forms/137', 'OneThreeSevenController@index')->name('onethreeseven-index'); // HTML view

	// Enrollment Form Module
	Route::get ('/forms/enrollment/create', 'EnrollmentController@create')->name('enrollment-create'); // HTML view
	Route::get ('/forms/enrollment/{id}/edit', 'EnrollmentController@edit')->name('enrollment-edit'); // HTML call
	Route::post('/forms/enrollment/store', 'EnrollmentController@store')->name('enrollment-store-api'); // API call
	Route::post('/forms/enrollment/{id}/update', 'EnrollmentController@update')->name('enrollment-update-api'); // API call

	// We do not use this methods because:
	// "/forms/enrollment"  is  "/students"
	// "/forms/enrollment/{id}" is  "/students/{id}"
	// "/forms/enrollment/get/all" is  "/students/get/all"
	// "/forms/enrollment/{id}/show" is  "/students/{id}/show"


// Perons/Students Module
// Person in database is referring to Students
Route::get('/students', 'PersonsController@index')->name('persons-index'); //HTML view
Route::get('/students/{id}', 'PersonsController@show')->name('persons-show'); // HTML view
Route::get('/students/get/all', 'PersonsController@persons')->name('persons-get-api'); // API call
Route::get('/students/{id}/show', 'PersonsController@showAPI')->name('persons-show-api'); // API call

// We do not use this methods because:
// "/students/create"  is  "/forms/enrollment/create"
// "/students/{id}/edit" is  "/forms/enrollment/{id}/edit"
// "/students/{id}/update" is  "/forms/enrollment/{id}/update"