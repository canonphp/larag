@include('admin.layouts.main.header')
<body>
<div class="x-body">
    <form class="layui-form" action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>文章标题
            </label>
            <div class="layui-input-block">
                <input type="text" id="username" name="title" required=""
                       autocomplete="off" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label for="username" class="layui-form-label">
                <span class="x-red">*</span>所属分类
            </label>
            <div class="layui-input-inline">
                <select id="shipping" name="cate_id" class="valid">
                    @foreach($cates as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">是否置顶</label>
            <div class="layui-input-block">
                <input type="checkbox" name="is_top" lay-skin="switch" lay-text="是|否">
            </div>
        </div>
        <div class="layui-form-item">
            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 30px;">
                <legend>文章图片拖拽上传</legend>
            </fieldset>

            <div class="layui-upload-drag" id="test10">
                <i class="layui-icon"></i>
                <p>点击上传，或将图片拖拽到此处</p>
            </div>
            <div class="layui-upload-drag" id="img">
                <img src="" alt="" id="imgurl">
            </div>
            <input type="hidden" value="" name="image" id="imgval">
        </div>

<div class="layui-form-item layui-form-text">
    <label for="desc" class="layui-form-label">
        文章内容
    </label>
    <div class="layui-input-block">
        <textarea id="demo" name="content" style="display: none;"></textarea>
    </div>
</div>
<div class="layui-form-item">
    <label for="L_repass" class="layui-form-label">
    </label>
    <button type="submit"  class="layui-btn"  lay-submit="">
        添加
    </button>
</div>
</form>
</div>
@include('admin.layouts.main.footer')