<?php
define('ROOT', __DIR__);
define('ROOT_FOLDER', 'BA_extra');
define('ROOT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' . ROOT_FOLDER);
define('DS', DIRECTORY_SEPARATOR);

include_once(ROOT . DS . 'Frame' . DS . 'core' . DS . 'autoloader.php');
new App;