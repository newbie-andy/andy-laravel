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

    Route::group(['prefix'=>'admin', 'namespace' => 'Admin'], function () {
        //通过创建资源控制器处理进行操作http://laravelacademy.org/post/7836.html
        //我们也可以制定处理的动作子集
        //由于 HTML 表单不支持发起 PUT、PATCH 和 DELETE 请求，需要添加一个隐藏的 _method 字段来伪造 HTTP 请求方式，辅助函数 method_field 可以帮我们做这件事：
        // Route::resource('posts', 'PostController');

        // //这里我们把api资源路由也在这里进行了声明，但是其最好出现在api.php中
        // //这里的api会自动屏蔽展示页面的处理方法，如： edit、create
        // Route::apiResource('post', 'PostController');

        // //我们可以自定义路由的名称:
        // Route::resource('post', 'PostController', ['names' => [
        //         'create' => 'post.build'
        //         ]
        // ]);
        
        Route::get('/', 'HomeController@index');
        //resource之外的路由，我们可以通过下面的方式进行添加，但最好在resource之前进行注册，否则可能会被覆盖
        Route::get('user/test', 'PostController@test');
        //参数问题
        Route::resource('user', 'PostController', ['parameters'=> [
                'user' => 'admin_user'
            ]
        ]);

        //
        Route::get('/addCookie', 'PostController@addCookie');
        Route::get('/getCookie', 'PostController@getCookie');
        Route::get('/setCookie', 'PostController@setCookie');
        
    });



});
