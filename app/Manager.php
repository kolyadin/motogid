<?php

namespace motogid\app;

use motogid\app\controllers\manager\AjaxController;
use motogid\app\controllers\manager\ModelController;

class Manager extends Application {

	public function __construct() {

		parent::__construct([
			'mode' => 'development',
			'debug' => true
		]);

		$this->connectTemplateEngine([
			'templates.path' => __DIR__ . '/../templates/manager'
		]);


	}

	public function setRoutes() {

		$this->registerController(new AjaxController());
		$this->registerController(new ModelController());

	}
}