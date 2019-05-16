<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\User;
use App\Permission;
use App\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // App\Notice::class => App\Policies\NoticePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $permissions = Permission::with('roles')->get();

        // dd($permissions);

        foreach($permissions as $key => $value)
        {
            Gate::define($value->name, function ($user, $post) use ($value)
            {
                return $user->hasPermission($value);
            });           
        }

        Gate::before(function($user, $ability)
        {
            if($user->hasAnyRoles('Admin'))
            {
                return true;
            }
        });
    }
}
