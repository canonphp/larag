<div class="header">
    <div class="menu-btn">
        <div class="menu"></div>
    </div>
    <h1 class="logo">
        <a href="/">
            <img src="/res/img/lavavel.png">
        </a>
    </h1>
    <div class="nav">
        <a href="/" @if (Request::is('/')) class="active" @else class="nav-item" @endif >首页</a>
        <a href="/article"  @if (Request::is('/article*')) class="active" @else class="nav-item" @endif>文章</a>
        <a href="/message"  class="{{ (Request::is('/message')?'active':'') }}">留言</a>
        <a href="/answers"  class="{{ (Request::is('/answers')?'active':'') }}">问答</a>
        <a href="/about"  class="{{ (Request::is('/about')?'active':'') }}">关于</a>
    </div>
    <div class="nav-right">
        @if(\Auth::check())
            <a href="javascript:;">你好！{{\Auth::user()->name}}</a>
            <span>&nbsp;&nbsp;</span>

            <a class="layui-btn layui-btn-radius layui-btn-warm" href="/logout">退出</a>

            @else
            <a href="/login" data-method="login" class="a-login">登录</a>
            <a href="/register" data-method="register" class="a-login">注册</a>
            @endif
    </div>
    <ul class="layui-nav header-down-nav">
        <li class="layui-nav-item"><a href="/" class="active">首页</a></li>
        <li class="layui-nav-item"><a href="/article">文章</a></li>
        <li class="layui-nav-item"><a href="/message">留言</a></li>
        <li class="layui-nav-item"><a href="/answers">问答</a></li>
        <li class="layui-nav-item"><a href="/about">关于</a></li>
        <li class="layui-nav-item"><a href="/login" data-method="login" class="a-login">登录</a></li>
        <li class="layui-nav-item"><a href="/register" data-method="register" class="a-login">注册</a></li>

    </ul>
    <p class="welcome-text" id="layerData">
        <span></span>
        <span>&nbsp;&nbsp;</span>
        <span></span>
    </p>
</div>