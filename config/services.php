<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'github' => [
        'client_id' => env('a6c27aed1a63e3d2ab50'),         // Your GitHub Client ID
        'client_secret' => env('3a3fc120968259b39a313eae6f846d12769c14ce'), // Your GitHub Client Secret
        'redirect' => '/home',
    ],

    'facebook' => [
        'client_id' => env('142570116328904'),         // Your Facebook Client ID
        'client_secret' => env('8628894ccdbe228323fbe0b974fdcb5b'), // Your Facebook Client Secret
        'redirect' => '/home',
    ],

];
