<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/12/11
 * Time: 14:44
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class IndexController extends Controller
{
    public function index()
    {
        $cates = Category::getCates();
        $articles = Article::getArticles();
        return view('home.index.index',['cates'=>$cates,'articles'=>$articles]);
    }

}