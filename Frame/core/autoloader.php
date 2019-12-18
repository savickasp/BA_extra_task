<?php
include_once (ROOT.DS.'Frame'.DS.'config'.DS.'config.php');
include_once (ROOT.DS.'Frame'.DS.'library'.DS.'functions.php');

spl_autoload_register('autoloader');

function autoloader($className)
{
    $pathArray = [
        ROOT . '/app/controllers/',
        ROOT . '/app/models/',
        ROOT . '/app/views/',
        ROOT . '/Frame/classes/',
        ROOT . '/Frame/core/',
    ];
    foreach ($pathArray as $path) {
        $pathFull = $path . $className . '.php';
        if (file_exists($pathFull)) {
            require_once($pathFull);
        }
    }
}