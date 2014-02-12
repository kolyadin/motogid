<?php

require_once '../vendor/autoload.php';

session_name('motogid-session');

if (!isset($_COOKIE) || !isset($_COOKIE[session_name()])){
	session_start();
}

$app = new \motogid\app\Motogid();
$app->setRoutes();
$app->run();