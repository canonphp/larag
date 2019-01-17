<?php

namespace App;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

class VisitorRegistry extends Model
{
    //
    protected $table = 'visitor_registry';
    protected $fillable = ['clicks'];


    /**
     * 访问登记数与文章一对多的关联关系
     */
    public function article()
    {
        return $this->belongsTo(Article::class,'article_id','id');
    }
}
