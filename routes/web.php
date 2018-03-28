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

Route::group(['middleware' => 'web'], function () {
    Route::get('login', 'LoginController@index')->name('login');
    Route::get('regist', 'RegistController@index')->name('regist');

    Route::group(['namespace' => 'Web'], function () { 
        Route::get('/', 'HomeController@index');        
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/home','HomeController@index')->name('home');    
            Route::get('/userid/{id}', 'HomeController@index');

        });
    });

});