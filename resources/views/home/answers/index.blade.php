@extends('home.layouts.base')
@section('content')

{{--
<div class="content whisper-content leacots-content">
    <div class="cont w1000">
        <div class="whisper-list">
            <div class="item-box">
                <div class="review-version">
                    <div class="form-box">
                        <img class="banner-img" src="../res/img/question.jpg">
                        <div class="form">
                            <form class="layui-form" action="">
                                <div class="layui-form-item layui-form-text">
                                    <div class="layui-input-block">
                                        <textarea  name="desc" placeholder="既然来了，就说几句" class="layui-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block" style="text-align: right;">
                                        <a id="" class="layui-btn definite">確定</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="volume">
                        全部问答 <span>10</span>
                    </div>
                    <div class="list-cont">

                        <div class="cont">
                            <div class="img">
                                <img src="../res/img/header.png" alt="">
                            </div>
                            <div class="text">
                                <p class="tit"><span class="name">吳亦凡</span><span class="data">2018/06/06</span></p>
                                <p class="ct">敢问大师，师从何方？上古高人呐逐一地看完你的作品后，我的心久久 不能平静！这世间怎么可能还有如此精辟的作品？我不敢相信自己的眼睛。自从改革开放以后，我就以为再也不会有任何作品能打动我，没想到今天看到这个如此精妙绝伦的作品好厉害！</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
--}}
<div class="content whisper-content leacots-content">
    <div class="cont w1000">
        <div class="whisper-list">
            <div class="item-box">
                <div class="review-version">
                    <div class="form-box">
            <div class="layui-container fly-marginTop">
                <div class="fly-panel" pad20 style="padding-top: 5px;">
                    <!--<div class="fly-none">没有权限</div>-->
                    <div class="layui-form layui-form-pane">
                        <div class="layui-tab layui-tab-brief" lay-filter="user">
                            <ul class="layui-tab-title">
                                <li class="layui-this">发表问题<!-- 编辑帖子 --></li>
                            </ul>
                            <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
                                <div class="layui-tab-item layui-show">
                                    <form action="" method="post">
                                        {{csrf_field()}}
                                        <div class="layui-row layui-col-space15 layui-form-item">
                                            {{--<div class="layui-col-md3">
                                                <label class="layui-form-label">所在专栏</label>
                                                <div class="layui-input-block">
                                                    <select  name="class" lay-filter="column">
                                                        <option></option>
                                                        <option value="0">提问</option>
                                                        <option value="99">分享</option>
                                                        <option value="100">讨论</option>
                                                        <option value="101">建议</option>
                                                        <option value="168">公告</option>
                                                        <option value="169">动态</option>
                                                    </select>
                                                </div>
                                            </div>--}}
                                            <div class="layui-col-md12">
                                                <label for="L_title" class="layui-form-label">标题</label>
                                                <div class="layui-input-block">
                                                    <input type="text" id="L_title" name="title"   autocomplete="off" class="layui-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layui-form-item layui-form-text">
                                            <div class="layui-input-block">
                                                <textarea id="L_content" name="content"  placeholder="问题描述" class="layui-textarea fly-editor" style="height: 260px;"></textarea>
                                            </div>
                                        </div>

                                        <div class="layui-form-item">
                                            <a id="answerSub" class="layui-btn" lay-filter="*" lay-submit>立即发布</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="volume">
                    全部问题 <span>{{$count}}</span>
                </div>
                <div class="list-cont">
                @foreach($answers as $answer)
                    <div class="cont">
                        <div class="img">
                            <img src="{{$answer->users->avatar}}" style="border-radius: 50%" width="60" alt="">
                        </div>
                        <div class="text">
                            <p class="tit">用户：<span style="color: #FFB800" class="name">{{$answer->users->name}}</span>
                                &nbsp;
                                <i class="layui-icon layui-icon-reply-fill"></i>{{$answer->replies_count}}
                                <span class="data">{{$answer->created_at->diffForHumans()}}
                                    <br>
                                    <br>
                                    <span>
                                        <a id="answer" onclick="replies_motai({{$answer->id}})"  class="layui-btn layui-btn-xs layui-btn-warm">我来解答</a>
                                    </span>
                                </span></p>
                            <p class="ct">
                            <h2>
                                <a href="/answers/{{$answer->id}}/detail">{!! $answer->title !!}</a>
                            </h2>

                            </p>
                            <div>
                                <div id="answerMotai" style="display: none;">
                                    <form class="layui-form">
                                        {{csrf_field()}}
                                        <input type="hidden" value="{{$answer->id}}" id="answer_id" name="answer_id">
                                        <div class="layui-form-item layui-form-text">
                                            <div class="layui-input-line">
                                                <textarea id="reply" name="content"  class="layui-textarea"></textarea>
                                            </div>
                                        </div>

                                        <div class="layui-form-item">
                                            <div class="layui-input-block">
                                                <a id="replySubmit" class="layui-btn">回答</a>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
                        <div class="page">
                            {{$answers->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    @endsection