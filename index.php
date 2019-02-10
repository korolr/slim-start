<?php

require __DIR__ . '/vendor/autoload.php';

// Create Slim app
$app = new \Slim\App();


// Set up dependencies
require __DIR__ . '/dependencies.php';
// Register middleware
require __DIR__ . '/middleware.php';
// Register routes
require __DIR__ . '/routes.php';

$app->run();


?>
