<!DOCTYPE html>
<html class="loginHtml">
<head>
    <meta charset="utf-8">
    <title>lara 用户注册</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="./favicon.ico">
    <link rel="stylesheet" href="./res/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="./res/css/login.css" media="all" />
    <style>
        .loginBody{ background:url("./res/img/gg.jpg") no-repeat center center;}
    </style>
</head>
<body class="loginBody">
<form class="layui-form" method="post" action="/register">
    {{csrf_field()}}
    <div class="login_face"><img src="./res/img/lavavel.png" class="userAvatar"></div>
    <div class="layui-form-item input-item">
        <label for="userName">用户名</label>
        <input type="text" placeholder="请输入邮箱" name="name" autocomplete="off" id="userName" class="layui-input">
    </div>
    <div class="layui-form-item input-item">
        <label for="userName">邮箱</label>
        <input type="text" placeholder="请输入邮箱" name="email" autocomplete="off" id="userName" class="layui-input" >
    </div>
    <div class="layui-form-item input-item">
        <label for="password">密码</label>
        <input type="password" placeholder="请输入密码" name="password" autocomplete="off" id="password" class="layui-input" >
    </div>
    <div class="layui-form-item input-item">
        <label for="password">重复密码</label>
        <input type="password" placeholder="请输入重复密码" name="password_confirmation" autocomplete="off" id="password" class="layui-input" >
    </div>
    <div class="layui-form-item input-item" id="imgCode">
        <label for="code">验证码</label>
        <input type="text" placeholder="请输入验证码" autocomplete="off" id="code" class="layui-input">
        <img src="{{captcha_src()}}"  onclick="this.src='{{captcha_src()}}'+Math.random()">
    </div>
    <div class="layui-form-item">
        @include('home.layouts.error')
    </div>
    <div class="layui-form-item">
        <button class="layui-btn layui-block" lay-filter="login" lay-submit>注册</button>
    </div>
    <div class="layui-form-item">
        <a class="layui-btn" href="/login">已有账号？登录</a>
        <a class="layui-btn" href="/">返回首页</a>
    </div>
    <div class="layui-form-item layui-row">
        <a href="javascript:;" class="seraph icon-qq layui-col-xs4 layui-col-sm4 layui-col-md4 layui-col-lg4"></a>
        <a href="javascript:;" class="seraph icon-wechat layui-col-xs4 layui-col-sm4 layui-col-md4 layui-col-lg4"></a>
        <a href="javascript:;" class="seraph icon-sina layui-col-xs4 layui-col-sm4 layui-col-md4 layui-col-lg4"></a>
    </div>
</form>
<script type="text/javascript" src="./res/layui/layui.js"></script>
<script type="text/javascript" src="./res/js/login.js"></script>
<!-- <script type="text/javascript" src="../../js/cache.js"></script> -->
</body>
</html>