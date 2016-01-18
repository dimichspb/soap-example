<?php

$basePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;

$config = [
    'basePath' => $basePath,
    'configFolder' => 'config',
    'applicationFolder' => 'app',

    'httpHostServer'=> 'localhost:8000',
    'httpHostWsdl'=> 'localhost:8000',
    'serverFileName' => 'server.php',
    'clientFileName' => 'client.php',

    'servicesFolder' => 'services',
    'serviceConfigFileName' => 'serviceConfig.php',

];

$config['httpHostServerUrl'] = "http://" . (isset($_SERVER['HTTP_HOST'])? $_SERVER['HTTP_HOST']: $config['httpHostServer']);
$config['httpHostWsdlUrl']   = "http://" . (isset($_SERVER['HTTP_HOST'])? $_SERVER['HTTP_HOST']: $config['httpHostWsdl']);

$config['SOAPServerFilePath'] = $config['httpHostServerUrl'] . "/" . $config['serverFileName'];
$config['SOAPCleintFilePath'] = $config['httpHostServerUrl'] . "/" . $config['clientFileName'];

ini_set("soap.wsdl_cache_enabled", "0");

return $config;