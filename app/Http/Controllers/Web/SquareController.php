<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;





class SquareController extends Controller
{
    //
    public function index() {
        return view('web.square.index');
    }
    
}
