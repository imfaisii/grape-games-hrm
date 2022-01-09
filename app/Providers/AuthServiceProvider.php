<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /* define a admin user role */
        Gate::define('is-admin', function ($user) {
            return $user->role == 'admin';
        });

        Gate::define('is-employee', function ($user) {
            return $user->role == 'employee';
        });

        Gate::define('is-both', function ($user) {
            return $user->role == 'employee' || $user->role == 'admin';
        });
    }
}
