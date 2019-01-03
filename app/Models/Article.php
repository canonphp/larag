<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['cate_id','title','content','is_top','image'];


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


    public static function getArticleCount()
    {
        $count = self::where(['state'=>1])->with('cates')->count();
        return $count;
    }

    public static function getCateByArticle($id)
    {
        $data = self::where(['cate_id'=>$id])->with('cates')->paginate(5);
        return $data;
    }


    public static function getAllArticles()
    {
        $data = self::where(['state'=>1])->orderBy('id','desc')->with('cates')->paginate(5);
        return $data;
    }

    //文章详情
    public static function getArticleDetail($id)
    {
        $data = self::with('cates')->find($id);
        return $data;
    }


}
