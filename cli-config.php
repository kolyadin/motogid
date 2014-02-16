<?php

require_once 'model/goods/GoodsIdentityGenerator.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;

$em = \motogid\app\helpers\ORMHelper::getORM();

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
	'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
	'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));

ConsoleRunner::run($helperSet);