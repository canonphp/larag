<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;
    //
    protected $fillable = [
        'user_id','content','state'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public static function getMessageCount()
    {
        $count = self::where(['state'=>1])->count();
        return $count;
    }

    public static function getMessageAll()
    {
        $data = self::where(['state'=>1])->with('users:id,name,email,avatar')->orderBy('created_at','desc')->paginate(10);
        return $data;
    }

}
