<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use zgldh\QiniuStorage\QiniuStorage;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $cates  = Category::getCates();
        $articles = Article::getArticles();
        $count = Article::getArticleCount();

        return view('admin.article.index')->with(['articles'=>$articles,'cates'=>$cates,'count'=>$count]);

    }

    public function create()
    {
        $cates = Category::getCates();

        return view('admin.article.create')->with(['cates'=>$cates]);

    }

    public function store(Request $request)
    {
        $posts = $request->all();
        if (isset($posts['is_top'])){
            $posts['is_top'] = 1;
        }
        $res = Article::create($posts);
        if ($res){
            return redirect('/backend/article');
        }


    }

    public function show(Article $article)
    {

        $cates = Category::getCates();
        return view('admin.article.show',compact('article'))->with(['cates'=>$cates]);

    }

    public function edit(Article $article)
    {

        $cates = Category::getCates();
        return view('admin.article.edit',compact('article'))->with(['cates'=>$cates]);
    }

    public function update(Article $article)
    {
        $article->cate_id = \request('cate_id');
        $article->title = \request('title');
        $article->image = \request('image');
        $article->content = \request('	content');
        if ($article->save()){
            return redirect("/admin.article.edit/{$article->id}");
        }


    }

    public function destroy()
    {

    }


    public function upload(Request $request)
    {

        $file = $request->file('file');
        $disk = QiniuStorage::disk('qiniu');
        $fileName = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
        $bool  = $disk->put('article/image_'.$fileName,file_get_contents($file->getRealPath()));
        if ($bool){
            $path = $disk->downloadUrl('article/image_'.$fileName);
            return ['msg'=>'上传成功','data'=>$path,'status'=>1];
        }
        return  ['msg'=>'上传失败','status'=>-1];


    }

}
