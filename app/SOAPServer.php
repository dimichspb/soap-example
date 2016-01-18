<?php

namespace App;

class SOAPServer extends SOAPService {

    private $server;
    public $config;

    public function __construct($serviceName)
    {
        $this->serviceName = $serviceName;
        $this->loadConfig();
        try {
            $this->server = new \SoapServer($this->wsdlFilePath);
        } catch (\Exception $e) {
            echo "Error creating SOAP server ", $e->getMessage();
        }
    }

    public function __call($name, $arguments)
    {
        return isset($arguments[0])? $this->server->$name($arguments[0]): $this->server->$name();
    }

    public function getServiceHandlerClass()
    {
        $serviceHandlerClass = $this->config['serviceHandlerClass'];
        $serviceHandlerPath  =  Application::$config['servicesFolder'] . DIRECTORY_SEPARATOR .
                                $this->config['serviceName'] . DIRECTORY_SEPARATOR .
                                $this->config['serviceHandlersFolder'] . DIRECTORY_SEPARATOR;

        return $serviceHandlerPath . $serviceHandlerClass;

    }
}