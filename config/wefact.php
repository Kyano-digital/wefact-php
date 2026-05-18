<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | WeFact API Key
    |--------------------------------------------------------------------------
    | You WeFact API key. You can find it in the WeFact dashboard.
    */
    'api_key' => env('WEFACT_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    | The base URL of the WeFact API. Only change this if you use a custom domain.
    */
    'base_url' => env('WEFACT_BASE_URL', 'https://api.mijnwefact.nl/v2/'),

    /*
    |--------------------------------------------------------------------------
    | Timeout
    |--------------------------------------------------------------------------
    | HTTP request timeout in seconds.
    */
    'timeout' => env('WEFACT_TIMEOUT', 30),
];
