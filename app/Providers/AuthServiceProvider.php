<?php

namespace App\Providers;

//use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //
        $gate->define('isAdmin',function($user){
            return $user ->UserType == 'admin';
        });
        $gate->define('isHeadOfTheDepartment',function($user){
            return $user ->UserType == 'head_of_the_department';
        });
        $gate->define('isLecturer',function($user){
            return $user ->UserType == 'lecturer';
        });
        $gate->define('isStudent',function($user){
            return $user ->UserType == 'student';
        });
    }
}
