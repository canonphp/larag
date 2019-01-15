<?php

namespace App\Policies;

use App\Model\Reply;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnswersPolicy
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

    public function delete(User $user,Reply $reply)
    {
        return $user->id == $reply->user_id;
    }

    public function update(User $user,Reply $reply)
    {
        return $user->id == $reply->user_id;
    }




}
