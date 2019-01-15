@extends('home.layouts.base')
@section('content')
    <div class="content whisper-content leacots-content details-content">
        @if(!empty($answers))
            <div class="cont w1000">
                <div class="whisper-list">
                    <div class="item-box">
                        <div class="review-version">
                            <div class="form-box">
                                <div class="article-cont">
                                    <div class="title">
                                        <h3>{{$answers->title}}</h3>
                                        <p class="cont-info"><span class="data">{{$answers->created_at->diffForHumans()}}</span>
                                            提问者：<a href="javascript:;"><span class="types">{{$answers->users->name}}</span></a></p>
                                    </div>

                                    <p class="layui-code">{!! $answers->content !!}</p>

                                    <div class="btn-box">

                                    </div>
                                </div>
                                <div class="form">
                                    <form class="layui-form">
                                        <input type="hidden" name="answers_id" id="answers_id" value="{{$answers->id}}">
                                        {{csrf_field()}}
                                        <div class="layui-form-item layui-form-text">
                                            <div class="layui-input-block">
                                                <textarea name="content" id="reply" placeholder="你有神马想说的？，就说几句吧" class="layui-textarea"></textarea>
                                            </div>
                                        </div>
                                        <div class="layui-form-item">
                                            <div class="layui-input-block" style="text-align: right;">
                                                <a class="layui-btn " id="detailReply">发表回答</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="volume">
                                全部回答 <span>{{$answers->replies_count}}</span>
                            </div>
                            <div class="list-cont">
                                @foreach($answers->replies as $reply)
                                    <div class="cont">
                                        <div class="img">
                                            <img src="{{$reply->users->avatar}}" style="border-radius: 50%" width="60" alt="">
                                        </div>
                                        <div class="text">
                                            <p class="tit">用户：<span style="color: #FFB800" class="name">{!!$reply->users->name!!}</span>
                                                <span class="data">{{$reply->created_at->diffForHumans()}}
                                                    @can('delete',$reply)
                                                        <span><a href="/replies/{{$reply->id}}/delete" style="color: #007DDB">删除</a></span>
                                                    @endcan
                                        </span>
                                            </p>
                                            <p class="ct layui-code">{!! $reply->content!!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page">

                </div>
            </div>
        @else
            <div class="cont w1000"><h1>暂无数据~~~~~</h1></div>
        @endif
    </div>

@endsection