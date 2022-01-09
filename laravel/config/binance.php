<?php

declare(strict_types=1);

//dd(env('BINANCE_KEY', ''));

return [
    /*
    |--------------------------------------------------------------------------
    | Binance authentication
    |--------------------------------------------------------------------------
    |
    | Authentication key and secret for Binance API.
    |
     */

    'auth' => [
        'key' => env('BINANCE_KEY', ''),
        'secret' => env('BINANCE_SECRET', ''),
    ],

    /*
    |--------------------------------------------------------------------------
    | API URLs
    |--------------------------------------------------------------------------
    |
    | Binance API endpoints
    |
     */

    'urls' => [
        'api' => 'https://api.binance.com/api/',
        'wapi' => 'https://api.binance.com/wapi/',
    ],

    /*
    |--------------------------------------------------------------------------
    | API Settings
    |--------------------------------------------------------------------------
    |
    | Binance API settings
    |
     */

    'settings' => [
        'timing' => env('BINANCE_TIMING', 5000),
        'ssl' => env('BINANCE_SSL_VERIFYPEER', true),
    ],
];
