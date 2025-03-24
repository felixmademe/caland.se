<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Recaptcha keys
    |--------------------------------------------------------------------------
    |
    */
    'key' => [
        'site' => env('GOOGLE_RECAPTCHA_SITE_KEY', null),
        'secret' => env('GOOGLE_RECAPTCHA_SECRET_KEY', null),

    ]
];