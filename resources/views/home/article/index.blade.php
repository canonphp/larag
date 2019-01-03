@extends('home.layouts.base')

@section('content')
    <div class="content whisper-content">
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
                            <p class="like"><i class="layui-icon layui-icon-praise"></i><span>1200</span></p>
                            <p class="edit"><i class="layui-icon layui-icon-reply-fill"></i><span>1200</span></p>
                            <p class="off"><span>展开</span><i class="layui-icon layui-icon-down"></i></p>
                        </div>
                    </div>
                    <div class="review-version layui-hide">
                        <div class="form">
                            <img src="../res/img/header2.png">
                            <form class="layui-form" action="">
                                <div class="layui-form-item layui-form-text">
                                    <div class="layui-input-block">
                                        <textarea name="desc" class="layui-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block" style="text-align: right;">
                                        <button class="layui-btn definite">確定</button>
                                    </div>
                                </div>
                            </form>
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
                            <div class="cont">
                                <div class="img">
                                    <img src="../res/img/header.png" alt="">
                                </div>
                                <div class="text">
                                    <p class="tit"><span class="name">吳亦凡</span><span class="data">2018/06/06</span></p>
                                    <p class="ct">敢问大师，师从何方？上古高人呐逐一地看完你的作品后，我的心久久 不能平静！这世间怎么可能还有如此精辟的作品？我不敢相信自己的眼睛。自从改革开放以后，我就以为再也不会有任何作品能打动我，没想到今天看到这个如此精妙绝伦的作品好厉害！</p>
                                </div>
                            </div>
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
                @endforeach
              {{--  <div class="item-box">
                    <div class="item">
                        <div class="whisper-title">
                            <i class="layui-icon layui-icon-date"></i><span class="hour">12:25</span><span class="date">2018/06/08</span>
                        </div>
                        <p class="text-cont">
                            一直听说牛油果吃起来像肥皂、肥肉，虽然很难吃，但是价格却很贵，我还是想尝试一下。今天公司新到了新西兰牛油果，这是新西兰牛油果是第一次在中国上市，个头比普通牛油果大了一倍，被誉为“超牛果”。好奇心驱使我尝了一颗，第一次吃牛油果没有见识，切开牛油果费了好大劲，切成了这样。
                        </p>
                        <div class="img-box">
                            <img src="../res/img/wy_img2.jpg">
                            <img src="../res/img/wy_img3.jpg">
                            <img src="../res/img/wy_img4.jpg">
                        </div>
                        <div class="op-list">
                            <p class="like"><i class="layui-icon layui-icon-praise"></i><span>1200</span></p>
                            <p class="edit"><i class="layui-icon layui-icon-reply-fill"></i><span>1200</span></p>
                            <p class="off"><span>展开</span><i class="layui-icon layui-icon-down"></i></p>
                        </div>
                    </div>
                    <div class="review-version layui-hide">
                        <div class="form">
                            <img src="../res/img/header2.png">
                            <form class="layui-form" action="">
                                <div class="layui-form-item layui-form-text">
                                    <div class="layui-input-block">
                                        <textarea name="desc" class="layui-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block" style="text-align: right;">
                                        <button class="layui-btn definite">確定</button>
                                    </div>
                                </div>
                            </form>
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
                            <div class="cont">
                                <div class="img">
                                    <img src="../res/img/header.png" alt="">
                                </div>
                                <div class="text">
                                    <p class="tit"><span class="name">吳亦凡</span><span class="data">2018/06/06</span></p>
                                    <p class="ct">敢问大师，师从何方？上古高人呐逐一地看完你的作品后，我的心久久 不能平静！这世间怎么可能还有如此精辟的作品？我不敢相信自己的眼睛。自从改革开放以后，我就以为再也不会有任何作品能打动我，没想到今天看到这个如此精妙绝伦的作品好厉害！</p>
                                </div>
                            </div>
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
                <div class="item-box">
                    <div class="item">
                        <div class="whisper-title">
                            <i class="layui-icon layui-icon-date"></i><span class="hour">12:25</span><span class="date">2018/06/08</span>
                        </div>
                        <p class="text-cont">
                            一直听说牛油果吃起来像肥皂、肥肉，虽然很难吃，但是价格却很贵，我还是想尝试一下。今天公司新到了新西兰牛油果，这是新西兰牛油果是第一次在中国上市，个头比普通牛油果大了一倍，被誉为“超牛果”。好奇心驱使我尝了一颗，第一次吃牛油果没有见识，切开牛油果费了好大劲，切成了这样。
                        </p>
                        <div class="img-box">
                            <img src="../res/img/wy_img5.jpg">
                        </div>
                        <div class="op-list">
                            <p class="like"><i class="layui-icon layui-icon-praise"></i><span>1200</span></p>
                            <p class="edit"><i class="layui-icon layui-icon-reply-fill"></i><span>1200</span></p>
                            <p class="off" off = 'true'><span>收起</span><i class="layui-icon layui-icon-up"></i></p>
                        </div>
                    </div>
                    <div class="review-version">
                        <div class="form">
                            <img src="../res/img/header2.png">
                            <form class="layui-form" action="">
                                <div class="layui-form-item layui-form-text">
                                    <div class="layui-input-block">
                                        <textarea name="desc" class="layui-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block" style="text-align: right;">
                                        <button class="layui-btn definite">確定</button>
                                    </div>
                                </div>
                            </form>
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
                            <div class="cont">
                                <div class="img">
                                    <img src="../res/img/header.png" alt="">
                                </div>
                                <div class="text">
                                    <p class="tit"><span class="name">吳亦凡</span><span class="data">2018/06/06</span></p>
                                    <p class="ct">敢问大师，师从何方？上古高人呐逐一地看完你的作品后，我的心久久 不能平静！这世间怎么可能还有如此精辟的作品？我不敢相信自己的眼睛。自从改革开放以后，我就以为再也不会有任何作品能打动我，没想到今天看到这个如此精妙绝伦的作品好厉害！</p>
                                </div>
                            </div>
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
                </div>--}}
            </div>
            <div class="page">

                    {{$cates->links()}}

            </div>
        </div>
    </div>

@endsection