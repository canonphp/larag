<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public $fillable = [
        'user_id','article_id','content'
    ];

    //关联用户表
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function articles()
    {
        return $this->belongsTo(Article::class,'article_id','id');
    }


}
