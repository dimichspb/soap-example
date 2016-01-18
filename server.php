<?php

require ("bootstrap.php");

use App\Application;
use App\SOAPServer;


Application::run();

header("Content-Type: text/xml; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));

$server = new SoapServer('SMSService');
$server->setClass($server->getServiceHandlerClass());
$server->handle();