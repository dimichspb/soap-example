<?php

namespace App;

trait Singleton {

    private static $_instance = null;

    public static function getInstance() {
        return self::$_instance ?: self::$_instance = new self;
    }

    private function __clone(){
    }
}