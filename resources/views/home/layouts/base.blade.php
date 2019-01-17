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



@include('home.layouts.footer')
<script type="text/javascript" src="/res/layui/layui.js"></script>
<script type="text/javascript" src="/res/js/com.js">
</script>

</body>
</html>