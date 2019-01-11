
layui.use(['layer','layedit'], function(){ //独立版的layer无需执行这一句
    var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
    var layedit = layui.layedit;
    var editIndex =  layedit.build('desc'); //建立编辑器
    var commIndex =  layedit.build('comment'); //建立编辑器
    var answersIndex =  layedit.build('L_content'); //建立编辑器
    layui.config({
        base: '/res/js/util/'
    }).use(['element','laypage','jquery','menu','form'],function(){
        element = layui.element,laypage = layui.laypage,$ = layui.$,menu = layui.menu;
        laypage.render({
            elem: 'demo'
            ,count: 70 //数据总数，从服务端得到
        });
        menu.init();
        menu.off();
        /*menu.submit()*/
    });

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
        }
    });



//留言
    $('#message').on('click',function () {

        var conetent = layedit.getText(editIndex);
        if (conetent ==''){
            layer.msg('内容不能为空');
            return false;
        }

        var data={
            desc:conetent,
                _token:$("input[name='_token']").val()
        };
        $.post('/message',data,function (res) {
            if (res.status==1){
                layer.msg(res.msg);
                setTimeout(function () {
                    window.location.reload();
                },3000)
            }else if (res.status ==-1){
                layer.msg(res.msg);
                return false;
            }else{
                layer.msg(res.msg);
                return false;
            }
        });

    /*    $.ajax({
            type:"POST",
            url:"/message",
            dataType:"json",
            data:{
                desc:conetent,
                _token:$("input[name='_token']").val()
            },
            success:function (res) {
                if (res.status==1){
                    layer.msg(res.msg,{icon:6});
                    setTimeout(function () {
                        window.location.reload()
                    },3000) ;
                }
                 else if(res.status==-1){
                    layer.msg(res.msg,{icon:5});
                    return false;
                }else{
                    layer.msg(res.msg,{icon:5});
                    return false;
                }
            }

        })*/
    });

    //评论
    $("#comments").on('click',function () {
        var content = layedit.getText(commIndex);
        var article_id  =$("#article_id").val();
        if (content == ''){
            layer.msg('评论内容不能空');
            return false;
        }
        var data = {
            comment:content,
             article_id:article_id,
            _token:$("input[name='_token']").val()
        };

        $.post('/comment',data,function (res) {
            if (res.status==1){
                layer.msg(res.msg);
                setTimeout(function () {
                    window.location.reload();
                },3000)
            }else if (res.status ==-1){
                layer.msg('请登录再评论吧');
                return false;
            }else{
                layer.msg('评论失败');
                return false;
            }
        });




      /*  $.ajax({
            type:"POST",
            url:"/comment",
            dataType:"json",
            data:{
                comment:content,
                article_id:article_id,
                _token:$("input[name='_token']").val()
            },
            success:function (res) {
                if (res.status==1){
                    layer.msg(res.msg);
                    setTimeout(function () {
                        window.location.reload();
                    },3000)
                }else if (res.status ==-1){
                    layer.msg('请登录再评论吧');
                    return false;
                }else{
                    layer.msg('评论失败');
                    return false;
                }
            }
        });*/


    });




    //问题
    $("#answerSub").on('click',function () {
        var content = layedit.getText(answersIndex);
        var title = $("#L_title").val();
        if (content == ''){
            layer.msg('提问内容不能空');
            return false;
        }
        if (title == ''){
            layer.msg('提问标题不能空');
            return false;
        }
        var data = {
            title:title,
            content:content,
            _token:$("input[name='_token']").val()
        };

        $.post('/answers',data,function (res) {
            if (res.status==1){
                layer.msg(res.msg);
                setTimeout(function () {
                    window.location.reload();
                },3000)
            }else if (res.status ==-1){
                layer.msg('请登录再评论吧');
                return false;
            }else{
                layer.msg('发表失败');
                return false;
            }
        });




      /*  $.ajax({
            type:"POST",
            url:"/comment",
            dataType:"json",
            data:{
                comment:content,
                article_id:article_id,
                _token:$("input[name='_token']").val()
            },
            success:function (res) {
                if (res.status==1){
                    layer.msg(res.msg);
                    setTimeout(function () {
                        window.location.reload();
                    },3000)
                }else if (res.status ==-1){
                    layer.msg('请登录再评论吧');
                    return false;
                }else{
                    layer.msg('评论失败');
                    return false;
                }
            }
        });*/


    });




    //
    // var active = {
    //     login: function(){
    //         //登录
    //         layer.open({
    //             type: 1
    //             ,title: '用户登录' //不显示标题栏
    //             ,closeBtn: false
    //             ,area: ['680px','500px']
    //             ,closeBtn:1
    //             ,shade: 0.6
    //             ,shadeClose:true
    //             ,resize:true
    //             ,maxmin:true
    //             ,id: 'LAY_login' //设定一个id，防止重复弹出
    //             ,btnAlign: 'c'
    //             ,moveType: 1 //拖拽模式，0或者1
    //             ,content: $('#loginMotai')
    //         });
    //     },
    //     register: function(){
    //         //注册
    //         layer.open({
    //             type: 1
    //             ,title: '用户注册' //不显示标题栏
    //             ,closeBtn: false
    //             ,area: ['680px','500px']
    //             ,closeBtn:1
    //             ,shade: 0.6
    //             ,shadeClose:true
    //             ,resize:true
    //             ,maxmin:true
    //             ,id: 'LAY_regiser' //设定一个id，防止重复弹出
    //             ,btnAlign: 'c'
    //             ,moveType: 1 //拖拽模式，0或者1
    //             ,content: $('#registerMotai')
    //         });
    //     }
    // };
    //
    //
    //
    // $('#logSubmit').on('click',function () {
    //     var logdata = {
    //         '_token': '{{csrf_token()}}',
    //         'email': $('#logemail').val(),
    //         'password': $('#logpass').val(),
    //         'captcha': $('#logcode').val(),
    //     };
    //     $.ajax({
    //         type: 'post',
    //         url: '/login',
    //         data: {
    //             '_token': '{{csrf_token()}}',
    //             'email': $('#logemail').val(),
    //             'password': $('#logpass').val(),
    //             'captcha': $('#logcode').val(),
    //         },
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content'),
    //         },
    //         dataType: "json",
    //         //在请求之前调用的函数
    //         //成功返回之后调用的函数
    //         success: function (e) {
    //             alert('调用成功')
    //         },
    //     })
    // });
    //
    //
    //
    //
    //
    //
    //
    //
    //
    // $('#layerData .a-login').on('click', function(){
    //     var othis = $(this), method = othis.data('method');
    //     active[method] ? active[method].call(this, othis) : '';
    // });

});
