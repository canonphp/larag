<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/12/11
 * Time: 14:46
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * 所有文章列表
     */
   /* public function lists()
    {

        $cates = Article::getAllArticles();

        return view('home.article.index')->with(['cates'=>$cates]);
    }*/


    //文章列表
    public function index()
    {
        $cate_id = intval(trim(request()->id));
        $cates = [];
        if ($cate_id){
            $cates['cate'] = Article::getCateByArticle($cate_id);
        }else{
            $cates['all'] = Article::getAllArticles();
        }


        return view('home.article.index')->with(['cates'=>$cate_id?$cates['cate']:$cates['all']]);
    }



    //文章详情
    public function show(Article $article)
    {
        $id = intval(trim(request()->id));
        $article = Article::getArticleDetail($id);

        return view('home.article.details')->with(['article'=>$article]);
    }


}