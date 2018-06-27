<?php

namespace App\Http\Middleware;

use Closure;

class TestStudy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //中间件的作用除了可以在用户登录的时候认证外，还可以扩展一下的任务
    //为离开站点的访问添加响应的头信息
    //日志中间件可以记录进入站点的请求信息
    public function handle($request, Closure $next)
    {
        //dd($request->all());这里我们可以监控并处理用户请求输入的信息
        return $next($request);
    }

}
