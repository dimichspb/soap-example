<?php

namespace App;

abstract class SOAPService {

    public        $serviceName;
    protected     $config;
    protected     $wsdlFilePath;

    protected function loadConfig() {

        $configFilePath =   Application::$config['basePath'] .
                            Application::$config['servicesFolder'] . DIRECTORY_SEPARATOR .
                            $this->serviceName . DIRECTORY_SEPARATOR .
                            Application::$config['serviceConfigFileName'];

        $this->config = require ($configFilePath);

        $this->wsdlFilePath =   Application::$config['httpHostWsdlUrl'] . "/" .
                                Application::$config['servicesFolder'] . "/" .
                                $this->serviceName . "/" .
                                $this->config['serviceWsdlFileName'];

    }

}