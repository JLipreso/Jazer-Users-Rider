<?php

return [
    /** Project Configurations */
    'project_refid'                 => env('PROJECT_REFID', ''),


    /** Database Connection Configurations */
    'conn_usersrider_ip'                 => env('CONN_USERSRIDER_IP', env('DB_HOST')),
    'conn_usersrider_pt'                 => env('CONN_USERSRIDER_PT', env('DB_PORT')),
    'conn_usersrider_db'                 => env('CONN_USERSRIDER_DB', env('DB_DATABASE')),
    'conn_usersrider_un'                 => env('CONN_USERSRIDER_UN', env('DB_USERNAME')),
    'conn_usersrider_pw'                 => env('CONN_USERSRIDER_PW', env('DB_PASSWORD')),

    /** Query parameters */
    'fetch_paginate_max'            => env('FETCH_PAGINATE_MAX', 25),
];
