<?php

require __DIR__.'/../vendor/autoload.php';

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Bind important service providers

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

// Load environment variables

(new Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables)->bootstrap($app);

// Register configurations and service providers

$app->configure('app');
$app->configure('database');
$app->register(App\Providers\AppServiceProvider::class);
$app->register(App\Providers\AuthServiceProvider::class);
$app->register(App\Providers\EventServiceProvider::class);
$app->register(App\Providers\RouteServiceProvider::class);

return $app;
