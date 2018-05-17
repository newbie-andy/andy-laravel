<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Wechat'], function () {
    Route::get('/show', 'CommonController@show');  
});

//隐式的模型注入方式
// Route::get('/user/{user}', function(App\Models\User $user) {
//     dd($user);
// });  

