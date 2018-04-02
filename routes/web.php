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
        //公共路由的部分 
        Route::get('/', 'HomeController@index');  
        Route::get('/square', 'SquareController@index');
        Route::get('/topics', 'TopicsController@index');      
        Route::group(['middleware' => 'auth'], function () {
            //用户登录状态的部分
            Route::get('/','HomeController@index');    
            Route::get('/dynamics', 'DynamicsController@index');
            Route::get('/collections', 'CollectionsController@index');
            Route::get('/publish', 'PublishController@index');
            Route::get('/settings', 'SettingsController@index');
            Route::get('/userinfo', 'UserInfoController@index');
        });
    });

});
