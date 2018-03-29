<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Common\BaseController;

class LoginController extends BaseController
{
    //用户登录的操作
    public function index(Request $request) {
        return view('auth.login');
    }
    
    
}
