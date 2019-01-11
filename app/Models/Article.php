<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['cate_id','title','content','is_top','image'];



    //关联评论表
    public function comments()
    {
        return $this->hasMany(Comment::class,'article_id','id');
    }


    public static function getArticles()
    {
        $data = self::where(['state'=>1])->orderBy('id','desc')->with('cates')->paginate(5);
        return $data;
    }


    public function cates()
    {
        return $this->hasOne(Category::class,'id','cate_id');
    }

    public function getArticleFind($id)
    {
        $find = self::where(['id'=>$id])->with('cates')->find();
        return $find;
    }

    //获取所有文章总数
    public static function getArticleCount()
    {
        $count = self::where(['state'=>1])->with('cates')->count();
        return $count;
    }

    public static function getCateByArticle($id)
    {
        $data = self::where(['cate_id'=>$id])->withCount(['cates','comments'])->paginate(5);
        return $data;
    }

    //获取所有文章
    public static function getAllArticles()
    {
        $data = self::where(['state'=>1])->orderBy('id','desc')->withCount(['cates','comments'])->paginate(5);
        return $data;
    }

    //文章详情
    public static function getArticleDetail($id)
    {
        $data = self::withCount(['cates','comments'])->find($id);
        return $data;
    }


}
