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

Route::view('/register', 'register');
Route::view('/login', 'login');
Route::view('/loginAdmin', 'loginAdmin');
Route::view('/registerAdmin', 'registerAdmin');

Route::post('/register', 'userController@register');
Route::post('/login', 'userController@login');
Route::post('/registerAdmin', 'adminController@register');
Route::post('/loginAdmin', 'adminController@login');
Route::get('/showProfile', "userController@showProfile");

Route::post('/job','jobController@insert');
Route::view('/job','job'); 
Route::view('/viewjob','viewjob');
Route::view('/viewjobearly','viewjobearly');
Route::view('/', 'early');
Route::get('/showjob', 'jobController@search');
Route::get('/showjobearly', 'jobController@searchearly');

Route::view('/insertdonation', 'insertdonation');
Route::view('/viewdonation','viewdonation');
Route::view('/viewdonationearly','viewdonationearly');
Route::post('/insertdonation','donationController@insert');
Route::get('/viewdonation', 'donationController@searching');
Route::get('/viewdonationearly', 'donationController@searchingearly');

route::view('/welcome','welcome');
Route::get('profile/{name}', 'userController@profile')->name('profile');

Route::post('/editProfile', "userController@updateProfile");
Route::view('/editProfile', 'editProfile');

Route::get('/addtojobs/{id}', 'ApplyJobController@add');
Route::get('/ApplyJob', 'ApplyJobController@view');