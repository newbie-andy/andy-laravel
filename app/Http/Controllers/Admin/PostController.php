<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($admin_user)
    {
        //
        return ['code'=>1, 'message'=>'你好世界', 'userid'=>$admin_user];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * test method
     */
    public function test() {
        dd(['code'=> 1, 'message'=> '主宰世界世界的造物主']);
    }

    //用于存储cookie
    public function addCookie(Request $request) {
        return response("成功")->cookie('name', '张烁');
    }

    //用于获取cookie
    public function getCookie(Request $request) {
        $name = $request->cookie('name');
        return response($name);
    }

    //cookie实例
    public function setCookie(Request $request) {
        $cookie = cookie('name', '张静');
        $name = response('cookie实例成功！')->cookie($cookie);
        return $name;
    }
}
