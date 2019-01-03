<script>
    layui.use(['form','layer','layedit','upload'], function(){
        $ = layui.jquery;
        var form = layui.form ,upload = layui.upload
            ,layer = layui.layer;
        var layedit = layui.layedit;
        layedit.build('demo'); //建立编辑器

        //自定义验证规则
        // form.verify({
        //     nikename: function(value){
        //         if(value.length < 5){
        //             return '昵称至少得5个字符啊';
        //         }
        //     }
        //     ,pass: [/(.+){6,12}$/, '密码必须6到12位']
        //     ,repass: function(value){
        //         if($('#L_pass').val()!=$('#L_repass').val()){
        //             return '两次密码不一致';
        //         }
        //     }
        // });

        //监听提交
        /* form.on('submit(add)', function(data){
             //console.log(data);
             //发异步，把数据提交给php
             $.post('/backend/article/create',data,function (res) {
                 if (res.status ==1){
                     layer.alert("增加成功", {icon: 6},function () {
                         // 获得frame索引
                         var index = parent.layer.getFrameIndex(window.name);
                         //关闭当前frame
                         parent.layer.close(index);
                     });
                 }
                 return false;
             });


         });*/


        //拖拽上传
        upload.render({
            elem: '#test10',
            url: '/backend/article/upload',
            data:{
                _token:"{{ csrf_token() }}"
            },
            done: function(res){
                if (res.status==1){
                    layer.alert(res.msg,{icon:5});
                    $("#imgurl").attr("src",res.data);
                    $("#imgval").attr("value",res.data);
                }

                layer.alert(res.msg,{icon:6});
            }
        });


    });
</script>

</body>

</html>