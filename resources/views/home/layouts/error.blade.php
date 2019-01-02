@if(count($errors)>0)
    <div class="layui-input-inline" id="err" role="alert">
        @foreach($errors->all() as $error)
            <li id="lierr" style="color: red;display: none">{{$error}}</li>
        @endforeach
    </div>
@endif