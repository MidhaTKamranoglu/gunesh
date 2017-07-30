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


Route::get('/addgroup', function () {
    return view('addgroup');
});



 Auth::routes();
Route::get('/ruller', 'RullerController@ruller');

Route::post('/ruller/insert', 'RullerController@insert');
Route::post('/test/check', 'OnlintestController@check');
Route::get('/onlinetest', 'OnlintestController@test');

Route::get('/student/{id}', 'StudentsController@student_show');




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/check', 'UserController@check');
Route::get('/profile', 'UserController@profile');
Route::post('/profile/connection', 'StudentsController@profile_connect');

Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/update/{id}', 'UserController@update');

Route::get('/useradd', 'UserController@adduser');
Route::post('/user/insert', 'UserController@insert');

// Route::get('/addgroup', 'GroupController@addgroup');
 Route::post('/group/insert', 'GroupController@insert');
Route::get('/addruller', 'RullerController@addruller');


Route::get('/attendance/{id}', 'TeacherController@attendance');

Route::post('/profile/status/{id}', 'UserController@status');


Route::post('/profile/update', 'UserController@profile_update');
Route::post('/parent/update', 'UserController@parent_update');




