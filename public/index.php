<?php

use HarryPotter\Utils\Application;

// I include the AltoRouter dependency
require __DIR__.'/../vendor/autoload.php';

// The application is launched
$app = new Application('\HarryPotter\Controllers');
$app->run();