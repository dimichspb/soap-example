<?php

$config = include('config/config.php');

$soap = new App\nusoap($config['wsdlFilePath']);

$functionName = 'GetCursOnDate';
$params = [
    'On_date' => date('Y-m-d'),
];

$result = $soap->$functionName($params);

var_dump($result);