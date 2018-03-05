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
Route::group(['middleware' => 'revalidate'],function(){
// Admin Route
  Route::resource('admin/company', 'Admin\PerusahaanController');
  Route::get('admin/company/delete/{id}', 'Admin\PerusahaanController@destroy');
  Route::resource('admin/userrequest', 'Admin\UserrequestController');
  Route::resource('admin/printdata', 'Admin\PrintController');
  Route::resource('admin/users', 'Admin\UsersController');
  Route::get('admin/users/delete/{id}', 'Admin\UsersController@destroy');

  Route::resource('admin','Admin\AdminController');

// User route
  Route::resource('user/join', 'User\PendaftaranController');
  Route::get('user/join/delete/{id}', 'User\PendaftaranController@destroy');
  Route::resource('user/requestpkl', 'User\RequestpklController');
  Route::resource('user','User\UserController');

  Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('error',function(){
  return view('404');
});
