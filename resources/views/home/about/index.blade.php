@extends('home.layouts.base')
@section('content')
<div class="about-content">
    <div class="w1000">
        <div class="item info">
            <div class="title">
                <h3>我的介绍</h3>
            </div>
            <div class="cont">
                <img src="../res/img/xc_img1.jpg">
                <div class="per-info">
                    <p >
                        <span class="name layui-code">斜杠骚年</span><br />
                        <span class="age layui-code">21岁</span><br />
                        <span class="Career layui-code">PHP菜鸟实习生</span><br />
                        <span class="interest layui-code">打篮球,打游戏,写Bug</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="item tool">
            <div class="title">
                <h3>我的技能</h3>
            </div>
            <div class="layui-fluid">
                <div class="layui-row">
                    <div class="layui-col-xs6 layui-col-sm3 layui-col-md3">
                        <div class="cont-box">
                            <img width="86" src="http://pkqj9sjev.bkt.clouddn.com/article/image_9f0b45caee799f38a1208c1e0abe65ee.jpg">
                            <p>20%</p>
                        </div>
                    </div>
                  {{--  <div class="layui-col-xs6 layui-col-sm3 layui-col-md3">
                        <div class="cont-box">
                            <img src="../res/img/gr_img3.jpg">
                            <p>80%</p>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm3 layui-col-md3">
                        <div class="cont-box">
                            <img src="../res/img/gr_img4.jpg">
                            <p>80%</p>
                        </div>
                    </div>
                    <div class="layui-col-xs6 layui-col-sm3 layui-col-md3">
                        <div class="cont-box">
                            <img src="../res/img/gr_img5.jpg">
                            <p>80%</p>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
        <div class="item contact">
            <div class="title">
                <h3>联系方式</h3>
            </div>

            <div class="cont">
                <img src="/res/img/weixin.jpg">
                <div class="text">
                    <p class="WeChat">邮箱：<span>861466264@qq.com</span></p>
                    <p class="qq">QQ：<span>861466264</span></p>
                    <p class="iphone">电话：<span></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
    s
    @endsection


