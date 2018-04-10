@extends('./app')

@section('content')
<link rel="stylesheet" href="{{asset('./css/auth.css')}}">
<main class="mdl-layout__content aligin-items">
    <div class="page-content">
        <div class="form">
            <div class="auth-box">
                <form method="POST">
                    <p>注册</p>
                    {{ csrf_field() }}
                    <input type="hidden" name="" />
                    <div class="mdl-textfield mdl-js-textfield">
                        <input name="name" class="mdl-textfield__input" type="text" id="username"/>
                        <label class="mdl-textfield__label" for="username">请输入用户名称</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input name="email" class="mdl-textfield__input" type="email" id="email"/>
                        <label class="mdl-textfield__label" for="email">请输入邮箱</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input name="password" class="mdl-textfield__input" type="password" id="password"/>
                        <label class="mdl-textfield__label" for="password">请输入密码</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                        <input name="password_confirmation" class="mdl-textfield__input" type="password" id="repassword"/>
                        <label class="mdl-textfield__label" for="repassword">请输入密码</label>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored full-width" id="regist">注册</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endSection

@section('pageScript')
@endSection