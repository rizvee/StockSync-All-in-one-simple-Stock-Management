<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Blade View Paths
    |--------------------------------------------------------------------------
    |
    | These paths are used by the view file loader to locate your views.
    |
    */

    'paths' => [
        resource_path('views'), // The default "resources/views" directory
        // Add additional view paths here if needed
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the "storage"
    | directory. However, you may change the path as needed.
    |
    */

    'compiled' => storage_path('framework/views'),

];

