layui.use(['layer','layedit','jquery','form','element','code'], function(){ //独立版的layer无需执行这一句
    var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
    var layedit = layui.layedit;
    layui.code({
        elem: 'pre',
        title: ''
        ,skin: 'notepad'
    });
    var editIndex =  layedit.build('desc'); //建立编辑器
    var commIndex =  layedit.build('comment'); //建立编辑器
    var answersIndex =  layedit.build('L_content'); //建立编辑器
    var repliesIndex =  layedit.build('reply'); //建立编辑器
    var listCommentIndex =  layedit.build('listComment'); //建立编辑器
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

    });

    //详情评论
    $("a#comments").on('click',function () {
        var content = layedit.getText(commIndex);
        var article_id  =$("#article_id").val();
        if (content == ''){
            layer.msg('评论内容不能空');
            return false;
        }
        var data = {
            comment:content,
            article_id:article_id,
            //_token:$("input[name='_token']").val()
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





    });



    //列表评论





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
                layer.msg('请登录再发表吧');
                return false;
            }else{
                layer.msg('发表失败');
                return false;
            }
        });





    });




    //


    //回答内容
      $("#detailReply").on('click',function () {
          var content =  layedit.getText(repliesIndex);
          var answer_id = $("#answers_id").val();
          if (content==''){
              layer.msg('回答不能为空');
              return false;
          }

          $.ajax({
              type:"POST",
              url:"/reply",
              dataType:"json",
              data:{
                  content:content,
                  answer_id:answer_id,
                 _token:$("input[name='_token']").val()
              },
              success:function (res) {
                  if (res.status==1){
                      layer.msg(res.msg);
                      setTimeout(function () {
                          window.location.reload();
                      },3000)
                  }else if (res.status ==-1){
                      layer.msg(res.msg);
                      return false;
                  }else{
                      layer.msg('回答失败');
                      return false;
                  }
              }
          });

      });



    /* var active = {
         login: function () {
             //登录
             layer.open({
                 type: 1
                 , title: '添加回答' //不显示标题栏
                 , closeBtn: false
                 , area: ['680px', '500px']
                 , closeBtn: 1
                 , shade: 0.6
                 , shadeClose: true
                 , resize: true
                 , maxmin: true
                 , id: 'LAY_answer' //设定一个id，防止重复弹出
                 , btnAlign: 'c'
                 , moveType: 1 //拖拽模式，0或者1
                 , content: $('#answerMotai')
             });
         }
     };*/
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
    /* $('#layerData .layui-btn').on('click', function(){
         var othis = $(this), method = othis.data('method');
         active[method] ? active[method].call(this, othis) : '';
     });*/

});
function replies_motai(id){
    layui.use(['jquery','layedit','form','element'],function () {
        var $ = layui.jquery, layer = layui.layer;
        var layedit = layui.layedit;
        var repliesIndex =  layedit.build('reply');
     /*   var html = '<div id="answerMotai">\n' +
        '<form class="layui-form" method="post" lay-filter="example">\n' +
        '<input type="hidden" value="'+id+'" id="answer_id" name="answer_id">\n' +
        '<div class="layui-form-item layui-form-text">\n' +
        '<div class="layui-input-line">\n' +
        '<textarea id="reply" name="content" class="layui-textarea"></textarea>\n' +
        '</div>\n' +
        '</div>\n' +
        '\n' +
        ' <div class="layui-form-item">\n' +
        '<div class="layui-input-block">\n' +
        '<a id="replySubmit" class="layui-btn">回答</a>\n' +
        '</div>\n' +
        '</div>\n' +
        '\n' +
        ' </form>\n' +
        '\n' +
        '  </div>';*/
        layer.open({
            type: 1
            , title: '添加回答' //不显示标题栏
            , closeBtn: false
            , area: ['680px', '500px']
            , closeBtn: 1
            , shade: 0.6
            , shadeClose: true
            , resize: true
            , maxmin: true
            , id: id //设定一个id，防止重复弹出
            , btnAlign: 'c'
            , moveType: 1 //拖拽模式，0或者1
            , content: $("#answerMotai")
        });


        //回答内容
        $("a#replySubmit").on('click',function () {
            var content =  layedit.getText(repliesIndex);
            if (content==''){
                layer.msg('回答内容不能为空');
                return false;
            }
              $.ajax({
                  type:"post",
                  url:"/reply",
                  dataType:"json",
                  data:{
                      content:content,
                      answer_id:id,
                      // _token:$("input[name='_token']").val()
                  },
                  success:function (res) {
                      if (res.status==1){
                          layer.msg(res.msg);
                          setTimeout(function () {
                              window.location.reload();
                          },3000)
                      }else if (res.status ==-1){
                          layer.msg(res.msg);
                          return false;
                      }else{
                          layer.msg('回答失败');
                          return false;
                      }
                  },

              });

        });

    });


}



//评论
function content_list(id)
{
    layui.use(['layer','layedit','jquery','form','element'], function(){
        var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
        var layedit = layui.layedit;
        var listCommentIndex =  layedit.build('listComment'); //建立编辑器

        layer.open({
            type: 1
            , title: '添加评论' //不显示标题栏
            , closeBtn: false
            , area: ['680px', '500px']
            , closeBtn: 1
            , shade: 0.6
            , shadeClose: true
            , resize: true
            , maxmin: true
            , id: id //设定一个id，防止重复弹出
            , btnAlign: 'c'
            , moveType: 1 //拖拽模式，0或者1
            , content: $("#articleMotai")
        });

        $("a#commentSubmit").on('click',function () {
            var content = layedit.getText(listCommentIndex);
            if (content == ''){
                layer.msg('评论内容不能空');
                return false;
            }
            var data = {
                comment:content,
                article_id:id,
                //_token:$("input[name='_token']").val()
            };

            $.post('/comment',data,function (res) {
                if (res.status==1){
                    layer.msg(res.msg);
                    setTimeout(function () {
                        window.location.reload();
                    },3000)
                }else if (res.status ==-1){
                    layer.msg(res.msg);
                    return false;
                }else{
                    layer.msg('评论失败');
                    return false;
                }
            });


        });




    });

}

//点赞
function zan_post(id) {
    layui.use(['layer','layedit','jquery','form','element'], function(){
        var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
        $.post('/zans',{article_id:id},function (res) {
           if (res.status==1){
               layer.msg('谢谢你的点赞');
               setTimeout(function () {
                   window.location.reload();
               },3000);
           }
           if (res.status==0){
               layer.msg('你已经赞过了');
               return false;
           }
           else{
               layer.msg('非法操作');
               return false;
           }
        })
    })
}

function deleteMessage(id) {
    layui.use(['layer','layedit','jquery','form','element'], function(){
        var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句

    layer.msg('你要删除当前评论吗？', {
         time: 0 //不自动关闭
        ,btn: ['确定', '取消']
        ,yes: function(index){
            $.post("/message/delete",{id:id},function (res) {
                if (res.status==1){
                    layer.msg('删除留言成功');
                    setTimeout(function () {
                        window.location.reload();
                    },3000);
                }
                else{
                    layer.msg('删除失败');
                    return false;
                }
            })

        }
    });

    })
}


