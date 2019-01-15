<?php

namespace App\Providers;

use App\Models\Zan;
use App\Policies\ReplyPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        /*'App\Model' => 'App\Policies\ModelPolicy',*/
        'App\Models\Comment'=>'App\Policies\CommentPolicy',
        'App\Models\Message'=>'App\Policies\MessagePolicy',
        'App\Models\Reply'=> ReplyPolicy::class,
        'App\Models\Zan'=> Zan::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
