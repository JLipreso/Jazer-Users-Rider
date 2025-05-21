<?php

return [
    'database_connection' => [
        'driver'        => 'mysql',
        'host'          => env('CONN_USERSRIDER_IP', config('usersriderconfig.conn_usersrider_ip')),
        'port'          => env('CONN_USERSRIDER_PT', config('usersriderconfig.conn_usersrider_pt')),
        'database'      => env('CONN_USERSRIDER_DB', config('usersriderconfig.conn_usersrider_db')),
        'username'      => env('CONN_USERSRIDER_UN', config('usersriderconfig.conn_usersrider_un')),
        'password'      => env('CONN_USERSRIDER_PW', config('usersriderconfig.conn_usersrider_pw')),
        'charset'       => 'utf8mb4',
        'collation'     => 'utf8mb4_unicode_ci',
        'prefix'        => ''
    ],
];