<?php

$basePath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;

$config = [
    'configFolder' => 'config',
    'applicationFolder' => 'app',
    'basePath' => $basePath,
    'autoloadScript' => 'autoload.php',
    'wsdlFilePath' => $basePath . 'cbr.wsdl',
];

$autoloadFilePath = $basePath . $config['applicationFolder'] . DIRECTORY_SEPARATOR . $config['autoloadScript'];
require($autoloadFilePath);

return $config;
