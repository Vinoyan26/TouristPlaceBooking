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

Route::get('/','welcomeController@index');

//Auth::routes();

//For User............................. 
Route::get('/login','Auth\User\LoginController@ShowLoginForm')->name('login');
Route::post('/login','Auth\User\LoginController@Login')->name('login');
Route::get('/register','Auth\User\RegisterController@ShowRegisterForm')->name('register');
Route::post('/register','Auth\User\RegisterController@Register')->name('register');
Route::post('/logout','Auth\User\LoginController@logout')->name('logout');

//For Admin
Route::get('/login/admin','Auth\Admin\LoginController@ShowLoginForm')->name('login.admin');
Route::post('/login/admin','Auth\Admin\LoginController@Login')->name('login.admin');
//Route::get('/register/admin','Auth\Admin\RegisterController@ShowRegisterForm')->name('register.admin');
//Route::post('/register/admin','Auth\Admin\RegisterController@Register')->name('register.admin');

Route::get('/admin', 'AdminController@index')->name('admin');
//Route::get('/home', 'HomeController@index')->name('home');
  

//Backend..................................................................
//For Product
Route::resource('guide','Backend\GuiderController');
//For Categary
Route::resource('place','Backend\PlaceController');
//For Order
Route::resource('book','Backend\BookController');
//for Customer
Route::resource('customer','Backend\CustomerController');

//Frontend.................................................................
//For Place
Route::get('placev/{id}','Frontend\PlaceController@index')->name('placev.index');
Route::post('booknow','Frontend\BookController@index')->name('booknow');
Route::post('confirm','Frontend\BookController@confirm')->name('confirm');

