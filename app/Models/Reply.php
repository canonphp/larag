<?php

namespace App\Model;

use App\Models\Answers;
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
}
