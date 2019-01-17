<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'article_id','user_id'
    ];
    //
}
