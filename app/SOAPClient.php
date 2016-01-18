<?php

namespace App;

class SOAPClient extends SOAPService{

    private $client;
    public $config;

    public function __construct($serviceName)
    {
        $this->serviceName = $serviceName;
        $this->loadConfig();
        try {
            $this->client = new \SoapClient($this->wsdlFilePath);
        } catch (\Exception $e) {
            echo "Error creating SOAP client ", $e->getMessage();
        }
    }

    public function __call($name, $arguments)
    {
        return $this->client->$name($arguments[0]);
    }

}