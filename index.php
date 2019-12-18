<?php
define('ROOT', __DIR__);
define('ROOT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/BA_extra');
define('DS', DIRECTORY_SEPARATOR);

$zip_url          = "http://atvira.sodra.lt/imones/downloads/2019/daily-2019-10.json.zip";
$destination_path = ROOT . '/public/' . uniqid(time(), true)."zip";
file_put_contents($destination_path, fopen($zip_url, 'r'));

include_once(ROOT . DS . 'Frame' . DS . 'core' . DS . 'autoloader.php');
new App;
