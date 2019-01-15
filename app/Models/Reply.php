<?php

namespace App\Models;

use App\Models\Answers;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
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
