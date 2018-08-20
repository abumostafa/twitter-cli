<?php

use Symfony\Component\Dotenv\Dotenv;

$rootDir = dirname(__FILE__);

require_once $rootDir . '/vendor/autoload.php';

$envFiles = ['.env', '.env.dist'];
$dotenv = new Dotenv();

foreach ($envFiles as $envFile) {
    if (file_exists($fullPath = $rootDir . "/" . $envFile)) {
        $dotenv->load($fullPath);
    }
}

