<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\User;
use App\Models\Zan;
use Illuminate\Auth\Access\HandlesAuthorization;

class ZanPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function zans(User $user,Article $article)
    {
        $zan = Zan::where(['user_id'=>$user->id,'article_id'=>$article->id])->find();

        if ($zan){
            return false;
        }

        return true;
    }

    public function unzans(User $user,Zan $zan)
    {
        return $user->id ==$zan->user_id;
    }


}
