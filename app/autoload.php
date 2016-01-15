<?php

function myAutoload($className)
{
    $className = strtolower(str_replace('\\', DIRECTORY_SEPARATOR, $className));

    include $className . '.php';
}

spl_autoload_register('myAutoload');