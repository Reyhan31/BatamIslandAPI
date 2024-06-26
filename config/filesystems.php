<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        'public_home' => [
            'driver' => 'local',
            'root' => storage_path('app/public/home'),
            'url' => env('APP_URL').'/storage/home',
            'visibility' => 'public',
            'throw' => false,
        ],

        'public_icon' => [
            'driver' => 'local',
            'root' => storage_path('app/public/icon'),
            'url' => env('APP_URL').'/storage/icon',
            'visibility' => 'public',
            'throw' => false,
        ],

        'public_aboutus' => [
            'driver' => 'local',
            'root' => storage_path('app/public/aboutus'),
            'url' => env('APP_URL').'/storage/aboutus',
            'visibility' => 'public',
            'throw' => false,
        ],

        'public_contactus' => [
            'driver' => 'local',
            'root' => storage_path('app/public/contactus'),
            'url' => env('APP_URL').'/storage/contactus',
            'visibility' => 'public',
            'throw' => false,
        ],

        'public_booking' => [
            'driver' => 'local',
            'root' => storage_path('app/public/booking'),
            'url' => env('APP_URL').'/storage/booking',
            'visibility' => 'public',
            'throw' => false,
        ],

        'public_membership' => [
            'driver' => 'local',
            'root' => storage_path('app/public/membership'),
            'url' => env('APP_URL').'/storage/membership',
            'visibility' => 'public',
            'throw' => false,
        ],

        'public_package' => [
            'driver' => 'local',
            'root' => storage_path('app/public/package'),
            'url' => env('APP_URL').'/storage/package',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
