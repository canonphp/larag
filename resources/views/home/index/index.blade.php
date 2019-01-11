@extends('home.layouts.base')
@section('content')
    <div class="banner">
        <div class="cont w1000">
            <div class="title">
                <h3>斜杠骚年</h3>
                <h4>吾爱Coding</h4>
            </div>
            <div class="amount">
                <p><span class="text">访问量</span><span class="access">0</span></p>
                <p><span class="text">日志</span><span class="daily-record">0</span></p>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="cont w1000">
            <div class="title">
        <span class="layui-breadcrumb" lay-separator="|">
          <a href="javascript:;" class="active">全部</a>
         @foreach($cates as $cate)
                <a href="/article/{{$cate->id}}" class="active">{{$cate->name}}</a>
             @endforeach

        </span>
            </div>
            <div class="list-item">
            @foreach($articles as $article)
                <div class="item">
                    <div class="layui-fluid">
                        <div class="layui-row">
                            <div class="layui-col-xs12 layui-col-sm4 layui-col-md5">
                                <div class="img"><img src="{{$article->image}}" height="250px" width="" alt=""></div>
                            </div>
                            <div class="layui-col-xs12 layui-col-sm8 layui-col-md7">
                                <div class="item-cont">
                                    <h3>{{$article->title}}<button class="layui-btn layui-btn-danger new-icon">new</button></h3>
                                    <a href="/article/{{$article->cate_id}}"><h5>{{$article->cates->name}}</h5></a>
                                    <p>{!!str_limit($article->content,100,'...')!!}</p>
                                    <a href="/article/{{$article->id}}/detail" class="go-icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
           <div class="page">
               {{$articles->links()}}
           </div>
        </div>
    </div>

@endsection