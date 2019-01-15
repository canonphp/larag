@extends('home.layouts.base')

@section('content')
<div class="content whisper-content leacots-content">
    <div class="cont w1000">
        <div class="whisper-list">
            <div class="item-box">
                <div class="review-version">
                    <div class="form-box">
                        <img class="banner-img" src="../res/img/liuyan.jpg">
                        <div class="form">
                            <form class="layui-form" action="">
                                {{csrf_field()}}
                                <div class="layui-form-item layui-form-text">
                                    <div class="layui-input-block">
                                        <textarea name="desc" id="desc" placeholder="既然来了，就说几句" class="layui-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block" style="text-align: right;">
                                        <a id="message" class="layui-btn">確定</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="volume">
                        全部留言 <span>{{$count}}</span>
                    </div>
                    <div class="list-cont">
                    @foreach($messages as $message )
                        <div class="cont">
                            <div class="img">
                                <img src="{{$message->users->avatar}}" style="border-radius: 50%" width="60" alt="">
                            </div>
                            <div class="text">
                                <p class="tit">
                                    <span style="color: #FFB800" class="name">{!!$message->users->name!!}&nbsp;</span>
                                    <span class="email">Email:<span style="color: #7da8c3">{{$message->users->email}}</span></span>
                                    <span class="data">{{$message->created_at->diffForHumans()}}
                                        @can('delete',$message)
                                        <span><a style="color: #007DDB" href="/message/{{$message->id}}/delete">删除</a></span>
                                        @endcan
                                    </span></p>
                                <p class="ct layui-code">{!! $message->content !!}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="page">
            {{$messages->links()}}
        </div>
    </div>
</div>

    @endsection

