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
			'templates.path' => __DIR__ . '/../templates/site'
		]);


	}

	public function setRoutes() {

		$this->registerController(new \motogid\app\controllers\site\NewsController());




		$this->get('/', function () {
			$this->view()->display('Front.twig');
		});

	}
}