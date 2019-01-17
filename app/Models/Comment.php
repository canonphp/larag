<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
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
