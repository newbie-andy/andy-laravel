<?php

namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;
use App\Http\Controllers\Web\CommonController;
use App\Models\Article as Articles;

class SquareController extends CommonController
{
    //
    public function index() {
        $articles = Articles::with('user:id,name')->where('is_public', 1)->paginate(15);
        return view('web.square.index',['articles' => $articles]);
    }


    
}
