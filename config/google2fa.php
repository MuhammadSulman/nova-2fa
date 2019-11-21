<?php

return [
    'auth' => Illuminate\Contracts\Auth\Factory::class,

    /**
     * Disable or enable middleware.
     */
    'enabled' => env('GOOGLE_2FA_ENABLED', true),

    'session_var' => '2fa',

    'keep_alive' => true,

    'models' => [
        /**
         * Change this variable to path to user model.
         */
        'user' => 'App\Models\User',
    ],
    'tables' => [
        /**
         * Table in which users are stored.
         */
        'user' => 'users',
    ],

    'recovery_codes' => [
        /**
         * Number of recovery codes that will be generated.
         */
        'count'          => 8,

        /**
         * Number of blocks in each recovery code.
         */
        'blocks'         => 3,

        /**
         * Number of characters in each block in recovery code.
         */
        'chars_in_block' => 16,

        /**
         * The following algorithms are currently supported:
         *  - PASSWORD_DEFAULT
         *  - PASSWORD_BCRYPT
         *  - PASSWORD_ARGON2I // available from php 7.2
         */
        'hashing_algorithm' => PASSWORD_BCRYPT,


    ],
];
