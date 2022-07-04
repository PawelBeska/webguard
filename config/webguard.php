<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Auth keys
    |--------------------------------------------------------------------------
    |
    | This values represents authorization data witch is required to successfully
    | maintain connection with right service in WebGuard API
    |
    */

    'public_key' => env('webguard_public_key'),
    'private_key' => env('webguard_private_key'),

];
