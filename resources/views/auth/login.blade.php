@extends('./app')

@section('content')
<main class="mdl-layout__content aligin-items">
    <div class="page-content">
        <div class="form">
            <div class="auth-box">
                <p>登录</p>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="email" id="email">
                    <label class="mdl-textfield__label" for="email">请输入邮箱</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="password">
                    <label class="mdl-textfield__label" for="password">请输入密码</label>
                </div>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored full-width">登录</button>
            </div>
        </div>
    </div>
</main>
@endSection