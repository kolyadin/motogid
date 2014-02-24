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
	protected function getApp() {

		return Slim::getInstance();

	}

	protected function appendData(array $vars) {
		$this->getApp()->view()->appendData($vars);
	}

	protected function display($template, array $vars = []) {
		$this->getApp()->view()->appendData($vars);
		$this->getApp()->view()->display($template);
	}


}