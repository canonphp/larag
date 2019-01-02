<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Category extends Model
{
    //
    protected $table = 'categorys';
    protected $fillable = [
        'name' ,'status'
    ];

    protected $hidden = ['created_at','updated_at'];

    //获取分类ID name
    public static function getCates()
    {
       $data =  self::where(['status'=>1])->get(['id','name']);
       return $data;

    }

    public function articles()
    {
        return $this->hasMany(Article::class,'cate_id','id');
    }

    //文章分类ID获取文章列表
    public static function getArticlesByCateId($id)
    {
        return self::where(['id'=>$id])->with('articles')->paginate(5);
    }

}
