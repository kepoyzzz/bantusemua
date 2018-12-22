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

Route::post('/job','jobController@insert');
Route::view('/job','job'); 
Route::view('/', 'layout');
Route::get('/showjob', 'jobController@search');
