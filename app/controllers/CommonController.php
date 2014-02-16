<?php

namespace motogid\app\controllers;

use motogid\app\Application;
use Slim\Slim;

/**
 * Class CommonController
 * @package motogid\app\controllers
 */
abstract class CommonController {

	/**
	 * @return Application
	 */
	protected function getApp(){

		return Slim::getInstance();

//		return self::$app;
	}

}