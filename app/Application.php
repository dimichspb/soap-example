<?php

namespace App;

class Application {
    use Singleton;

    public static $config;

    const CONFIG_FILEPATH = 'config/config.php';

    public function __construct()
    {
        $configFilePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . self::CONFIG_FILEPATH;
        self::$config = include $configFilePath;
    }

    public static function run()
    {
        return self::getInstance();
    }
}