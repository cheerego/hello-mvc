#!/usr/bin/env php
<?php
// application.php
define('APP_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'App');
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();
// ... register commands
$application->add(new GenerateController());
$application->add(new GenerateModel());
$application->add(new GeneratePlugin());
$application->add(new Check());
$application->run();