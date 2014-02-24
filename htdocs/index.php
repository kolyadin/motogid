<?php

require_once '../vendor/autoload.php';

session_name('motogid-session');
session_start();

$app = new \motogid\app\Motogid();
$app->setRoutes();
$app->run();