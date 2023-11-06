<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default session "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any other driver below. Other drivers may be used
    | for features like database, cookie, and more.
    |
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, you should set that
    | option to zero.
    |
    */

    'lifetime' => env('SESSION_LIFETIME', 120),

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Encryption Settings
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted. This will use the default application key for
    | encryption and should be all you need to make this work.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option sets the default SameSite attribute on the session cookie.
    | The default value, "lax", allows the cookie to be sent in first-party
    | contexts, but not in a third-party context. The other available option
    | is "strict" which sets the SameSite attribute to "Strict" and will only
    | allow the cookie to be sent in a first-party context.
    |
    | https://tools.ietf.org/html/draft-west-first-party-cookies-07
    |
    */

    'same_site' => null,

    /*
    |--------------------------------------------------------------------------
    | Cookie Name
    |--------------------------------------------------------------------------
    |
    | This option sets the name of the cookie used to store the session ID
    | on the client's side. This value is used to set the name of the cookie
    | in the application's cookies configuration file.
    |
    */

    'cookie' => env('SESSION_COOKIE', Str::slug(env('APP_NAME', 'laravel'), '_').'_session'),

    /*
    |--------------------------------------------------------------------------
    | Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the cache store that will be used for these sessions
    | when utilizing the "cache" session driver. A sensible default has been
    | setup for you but you are free to change the store to any other cache
    | store that is configured in your application.
    |
    */

    'store' => env('SESSION_STORE', null),

    /*
    |--------------------------------------------------------------------------
    | Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some session drivers, like APC or Memcached, may sweep away old sessions
    | after a random number of requests. Here are the configuration options
    | to be used when that is possible. When using the "file" or "database" session
    | drivers, this option does nothing.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session backends, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |
    */

    'connection' => env('SESSION_CONNECTION', null),

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table we
    | should use to manage the sessions. Of course, a sensible default is
    | provided for you; however, you are free to change this as needed.
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Session Cache Expiration
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, you should set that
    | option to zero.
    |
    */

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | When using the "apc" or "memcached" session drivers, some sessions may
    | not be swept after they have expired. This happens due to those
    | drivers' need to randomly sweep old sessions. Here are the odds
    | of it happening on a session by session basis.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application but you are free to change this when necessary.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify a session.
    | This will determine what domains the cookie is available to in your
    | application. A sensible default has been set.
    |
    */

    'domain' => env('SESSION_DOMAIN', null),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Control
    |--------------------------------------------------------------------------
    |
    | This header will be added to each response given by your application
    | and is used to disable content type sniffing for a certain request.
    |
    */

    'http_only' => true,

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option sets the default SameSite attribute on the session cookie.
    | The default value, "lax", allows the cookie to be sent in first-party
    | contexts, but not in a third-party context. The other available option
    | is "strict" which sets the SameSite attribute to "Strict" and will only
    | allow the cookie to be sent in a first-party context.
    |
    | https://tools.ietf.org/html/draft-west-first-party-cookies-07
    |
    */

    'same_site' => null,

];

