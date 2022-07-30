<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id'     => '2225519447572537',
        'client_secret' => '6124aa80b85b590c2c5e3bcca5a7a011',
        'redirect'      => env('APP_URL') . 'http://localhost:7001/callback',
    ],
    'google' => [
    'client_id'     => '10905577387-nbkfrl6gfk3el464gh1scr7g2s9nu79r.apps.googleusercontent.com',
    'client_secret' => 'Qmbei4-tZbBioZdxYhenYqeN',
    'redirect'      =>  'http://localhost:7001',
],

];




