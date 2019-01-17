<?php

namespace App\Models;

use App\Models\Reply;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answers extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'user_id','title','content'
    ];


    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


    public function replies()
    {
        return $this->hasMany(Reply::class,'answer_id','id')->orderBy('created_at','desc');
    }

    public static  function getAnswersCount()
    {
        return self::count();
    }


    public static function getAnswersAll()
    {
        $data = self::withCount(['users:id,name,avatar','replies'])->orderBy('created_at','desc')->paginate(8);
        return $data;
    }




}
