<?php

namespace App\Models;

use App\Models\Answers;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reply extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'user_id','answer_id','content'
    ];


    public function answers()
    {
        return $this->belongsTo(Answers::class,'answer_id','id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


}
