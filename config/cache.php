<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache connection that gets used while
    | using this caching library. This connection is used when another is
    | not explicitly specified when executing a given caching function.
    |
    */

    'default' => env('CACHE_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Cache Connections
    |--------------------------------------------------------------------------
    |
    | Here you may specify the cache connections for your application.
    |
    | The database and Redis drivers have been included by default. Other
    | drivers are available as Laravel packages and can be installed as
    | needed. The full list of drivers is available here:
    | https://laravel.com/docs/cache#available-cache-stores
    |
    */

    'stores' => [

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'cache',
            'connection' => null,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        // ... (other cache stores)

    ],

    // ... (other cache-related configurations)

];
