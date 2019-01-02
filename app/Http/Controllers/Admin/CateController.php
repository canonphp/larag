<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CateController extends BaseController
{
    //
    public function index()
    {

        $cates =  Category::where(['status'=>1])->orderBy('id','desc')->paginate(3);

        return view('admin.cate.index')->with(['cates'=>$cates]);

    }

    public function create()
    {
        return view('admin.cate.create');

    }

    public function shore(CateRequest $request)
    {

        $post = $request->all();
        $post['status'] = 1;
        $res = Category::create($post);
        if ($res){
            return redirect('/backend/cate');
        }


    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }





}
