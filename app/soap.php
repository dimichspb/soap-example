<?php

namespace App;

class soap {

    private $client;

    public function __construct($wsdlFilePath)
    {
        try {
            $this->client = new \SoapClient($wsdlFilePath);
        } catch (\Exception $e) {
            echo "Error creating SOAP client ", $e->getMessage();
        }
    }

    public function __call($name, $arguments)
    {
        return $this->client->$name($arguments[0]);
    }

}