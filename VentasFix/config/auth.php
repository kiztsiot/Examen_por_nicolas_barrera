<?php

return [


    'defaults' => [
        'guard' => 'web',
        'passwords' => 'usuarios',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'Usuario',
        ],
    ],

    

    'providers' => [
        'Usuario' => [
            'driver' => 'eloquent',
            'model' => App\Models\Usuario::class,
        ],

    ],


    'passwords' => [
        'Usuario' => [
            'provider' => 'Usuario',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
