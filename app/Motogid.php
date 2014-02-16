<?php

namespace motogid\app;

use motogid\app\controllers\NewsController;
use motogid\app\controllers\PartsController;

class Motogid extends Application {

	public function __construct() {

		parent::__construct([
			'mode' => 'development',
			'debug' => true
		]);

		$this->connectTemplateEngine([
			'templates.path' => '../templates'
		]);


	}

	public function setRoutes() {

		$this->registerController(new NewsController());
//		$this->registerController(new PartsController());




		$this->get('/', function () {
			$this->view()->display('Front.twig');
		});

	}
}