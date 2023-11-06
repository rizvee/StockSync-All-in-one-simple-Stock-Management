<?php

// Load the Composer autoloader to load your application's dependencies
require __DIR__.'/../vendor/autoload.php';

// Load your application's configuration and bootstrap your application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Run the application
$app->run();
