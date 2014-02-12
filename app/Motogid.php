<?php

namespace motogid\app;

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

		$this->get('/', function () {
			$this->view()->display('Front.twig');
		});

	}
}