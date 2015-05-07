<?php

define('BASE_DIR', dirname(__DIR__));
define('APP_DIR', BASE_DIR . '/application');

$loader = new \Phalcon\Loader();
// register an application namespace
$loader->registerNamespaces(['Application' => '../application']);

$loader->register();

$bootstrap = new \Application\Bootstrap();
// create an application
$application = $bootstrap->createApplication();

// handle a request, then send the response
echo $application->handle()->getContent();