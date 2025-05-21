<?php

namespace Jazer\UsersRider\Http\Provider;

use Illuminate\Support\ServiceProvider;

class UsersRiderServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../../config/database.php', 'usersrider'  
        );
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../../config/config.php' => config_path('usersriderconfig.php')
        ], 'usersriderconfig-config');
        
        $this->loadRoutesFrom( __DIR__ . '/../../../routes/api.php');

        config(['database.connections.conn_usersrider' => config('usersrider.database_connection')]);
    }
}
