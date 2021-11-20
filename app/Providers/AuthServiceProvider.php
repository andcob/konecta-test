<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        /*Se agrega el usuario Super Admin
        **Se Otorga implícitamente todos los permisos       
        **Esto ocurre la primera vez que se crea un usuario con este correo
        */
        Gate::before(function ($user, $ability) {
            return $user->email == 'admin@gmail.com' ?? null;
        });
    }
}
