@extends('home.layouts.base')

@section('content')
    <div class="content whisper-content">
        @if(count($cates))
        <div class="cont">
            <div class="whisper-list">
                @foreach($cates as $cate)
                <div class="item-box">
                    <div class="item">
                        <div class="whisper-title">
                            <h2><a href="/article/{{$cate['id']}}/detail">{{$cate['title']}}</a></h2>
                        </div>
                        <div class="whisper-title">
                                <i class="layui-icon layui-icon-date"></i><span class="hour">{{$cate->cates['name']}}</span><span class="date">{{$cate['created_at']->toFormattedDateString()}}</span>
                        </div>
                        <p class="text-cont">
                          {{str_limit($cate->content,'80','...')}}
                        </p>
                        <div class="img-box">
                            <img src="{{$cate->image}}" width="200px">
                        </div>
                        <div class="op-list">
                            @can('zans',$cate)
                            <p  class="like active"><i class="layui-icon layui-icon-praise"></i><span>{{$cate->zans_count}}</span></p>
                            @endcan
                             <p onclick="zan_post({{$cate->id}})" class="like"><i class="layui-icon layui-icon-praise"></i><span>{{$cate->zans_count}}</span></p>

                            <p class="edit"><i class="layui-icon layui-icon-reply-fill"></i><span>{{$cate->comments_count}}</span></p>
                            <p class="off"><span>展开</span><i class="layui-icon layui-icon-down"></i></p>
                        </div>
                    </div>
                    <div class="review-version layui-hide">
                        <div class="form">
                            <img src="../res/img/header2.png">
                            <form class="layui-form">
                               {{-- <input type="hidden" id="article_id" value="{{$cate['id']}}">--}}
                                {{csrf_field()}}
                                <div class="layui-form-item">
                                    <div class="layui-input-block" style="text-align: right;">
                                        <a class="layui-btn " onclick="content_list({{$cate->id}})" >发表评论</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="list-cont">
                        @foreach($cate->comments as $comment)
                            <div class="cont">
                                <div class="img">
                                    <img src="{{$comment->users->avatar}}" style="border-radius: 50%" width="60" alt="">
                                </div>
                                <div class="text">
                                    <p class="tit"><span class="name">{!!$comment->users->name!!}</span><span class="data">{{$comment->created_at->diffForHumans()}}</span></p>
                                    <p class="ct layui-code">{!! $comment->content !!}</p>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="page">

                    {{$cates->links()}}

            </div>

            <div id="articleMotai" style="display: none;">
                <form class="layui-form">
                    {{csrf_field()}}
                    <div class="layui-form-item layui-form-text">
                        <div class="layui-input-line">
                            <textarea id="listComment" name="comment"  class="layui-textarea"></textarea>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <a id="commentSubmit" class="layui-btn">评论</a>
                        </div>
                    </div>

                </form>

            </div>
        </div>
            @else
            <div class="cont"><h1>暂无数据~~~</h1></div>
            @endif
    </div>

@endsection

