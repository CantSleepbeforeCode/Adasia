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
Route::get('/', 'landingPageController@redirect');
Route::get('/Home-Page', 'FirebaseController@index')->name('home-page');
Route::get('/comingSoon', 'landingPageController@comingSoon')->name('comingSoon');
Route::post('/pre-register','FirebaseController@store');
Route::post('/firebase', 'FirebaseController@index');
Route::middleware('guest')->group(function() {
  Route::get('login', 'AuthController@index')->name('login');
  Route::post('doLogin', 'AuthController@doLogin');
});

Route::group(['middleware' => 'auth'], function(){
  Route::get('check-role', 'AuthController@checkRole')->name('check-role');
  Route::post('logout', 'AuthController@doLogout')->name('logout');
  Route::get('/dashboard/formMinat', 'dashboardController@index')->name('dasboard.formMinat');
});
