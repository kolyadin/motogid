<?php

require '../../vendor/autoload.php';

setlocale(LC_TIME,"ru_RU.utf8");
date_default_timezone_set('Europe/Moscow');

session_name('motogid-manager-session');

if (!isset($_COOKIE) || !isset($_COOKIE[session_name()])){
	session_start();
}


$app = new \motogid\app\Manager();
$app->setRoutes();
$app->run();