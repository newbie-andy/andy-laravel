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
    //用户登录、注册、修改等操作，在原来的基础上进行改动的
    Route::auth();

    Route::group(['namespace' => 'Web'], function () { 
        Route::get('/', 'HomeController@index');        
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/home','HomeController@index')->name('home');    
            Route::get('/userid/{id}', 'HomeController@index');

        });
    });

});
