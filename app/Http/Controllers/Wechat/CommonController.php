<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    //token的验证操作
    private function checkSignature(Request $request) {
        $signature = $request->get("signature");
        $timestamp = $request->get("timestamp");
        $nonce = $request->get("nonce");
        $echostr = $request->get("echostr");
    
        $tmpArr = array($timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $signature ){
            return $echostr;
        }else{
            return false;
        }
    }

    public function show() {
        echo "api是可以通的";
    }
}
