@extends('home.layouts.base')
@section('content')
<div class="content whisper-content leacots-content details-content">
    @if(!empty($article))
    <div class="cont w1000">
        <div class="whisper-list">
            <div class="item-box">
                <div class="review-version">
                    <div class="form-box">
                        <div class="article-cont">
                            <div class="title">
                                <h3>{{$article->title}}</h3>
                                <p class="cont-info"><span class="data">{{$article->created_at->toFormattedDateString()}}</span>
                                    <a href="/article/{{$article->cate_id}}"><span class="types">{{$article->cates->name}}</span></a></p>
                            </div>
                            <img src="{{$article->image}}" width="560px">
                            <p class="layui-code">{!! $article->content !!}</p>

                            <div class="btn-box">
                                <a href="/article/{{$article['id']-1}}/detail" class="layui-btn layui-btn-primary">上一篇</a>
                                <a href="/article/{{$article['id']+1}}/detail" class="layui-btn layui-btn-primary">下一篇</a>
                            </div>
                        </div>
                        <div class="form">
                            <form class="layui-form">
                                <input type="hidden" id="article_id" value="{{$article['id']}}">
                                {{csrf_field()}}
                                <div class="layui-form-item layui-form-text">
                                    <div class="layui-input-block">
                                        <textarea name="comment" id="comment" placeholder="你有神马想说的？，就说几句吧" class="layui-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block" style="text-align: right;">
                                        <a class="layui-btn " id="comments">確定</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="volume">
                        全部评论 <span>{{$article->comments_count}}</span>
                    </div>
                    <div class="list-cont">
                        @foreach($article->comments as $comment)
                        <div class="cont">
                            <div class="img">
                                <img src="{{$comment->users->avatar}}" style="border-radius: 50%" width="60" alt="">
                            </div>
                            <div class="text">
                                <p class="tit">用户：<span style="color: #FFB800" class="name">{!!$comment->users->name!!}</span>
                                    <span class="data">{{$comment->created_at->diffForHumans()}}
                                        @can('delete',$comment)
                                        <span><a href="/comment/{{$comment->id}}/delete" style="color: #007DDB">删除</a></span>
                                        @endcan
                                    </span>
                                    </p>
                                <p class="ct layui-code">{!! $comment->content!!}</p>
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