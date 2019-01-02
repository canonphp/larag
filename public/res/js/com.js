
layui.use('layer', function(){ //独立版的layer无需执行这一句
    var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句

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
        menu.submit()
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
