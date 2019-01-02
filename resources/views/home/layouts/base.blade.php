<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>lara博客</title>
    <link rel="stylesheet" type="text/css" href="/res/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="/res/css/main.css">
    <!--加载meta IE兼容文件-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('home.layouts.header')
@yield('content')


{{--
<div id="loginMotai" style="display: none;height: 350px;width: 400px;padding-top:50px; ">
    <form class="layui-form" method="post"   lay-filter="example">
        {{csrf_field()}}
        <div class="layui-form-item">
            <label class="layui-form-label">邮箱</label>
            <div class="layui-input-block">
                <input type="text" id="logemail" name="email" lay-verify="title" autocomplete="off" placeholder="请输入邮箱" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-block">
                <input type="password" id="logpass" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>

        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">验证码</label>
            <div class="layui-inline">
                <input type="text" id="logcode" name="VerifCode" placeholder="请输入验证码" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-inline">
                <img src="{{captcha_src()}}"  onclick="this.src='{{captcha_src()}}'+Math.random()">
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button id="logSubmit" class="layui-btn">登录</button>
            </div>
        </div>

    </form>

</div>

<div id="registerMotai" style="display: none;height: 350px;width: 400px;padding-top:50px; ">
    <form class="layui-form" method="post" action="/register" lay-filter="example">
        {{csrf_field()}}
        <div class="layui-form-item">
            <label class="layui-form-label">用户名</label>
            <div class="layui-input-block">
                <input type="text" name="username" lay-verify="title" autocomplete="off" placeholder="请输入用户名" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">邮箱</label>
            <div class="layui-input-block">
                <input type="text" name="email" lay-verify="title" autocomplete="off" placeholder="请输入用户名" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-block">
                <input type="password" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">重复密码</label>
            <div class="layui-input-block">
                <input type="password" name="repassword" placeholder="请输入重复密码" autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">验证码</label>
            <div class="layui-inline">
                <input type="text" name="VerifCode" placeholder="请输入验证码" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-inline">
                <img src="{{captcha_src()}}"  onclick="this.src='{{captcha_src()}}'+Math.random()">
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit="submit" lay-filter="demo1">注册</button>
            </div>
        </div>
    </form>

</div>--}}


@include('home.layouts.footer')
<script type="text/javascript" src="/res/layui/layui.js"></script>
<script type="text/javascript" src="/res/js/com.js">
</script>
</body>
</html>