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
  Route::resource('/company', 'PerusahaanController');
  Route::get('company/delete/{id}', 'PerusahaanController@destroy');

  Route::resource('/join', 'PendaftaranController');
  Route::get('delete/{id}', 'PendaftaranController@destroy');

  Route::resource('/userrequest', 'UserrequestController');

  Route::resource('/requestpkl', 'RequestpklController');

  Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('error',function(){
  return view('404');
});
