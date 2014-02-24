<?php

namespace motogid\app;

use motogid\app\controllers\CommonController;
use motogid\app\controllers\ControllerInterface;
use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

ini_set('display_errors', true);
error_reporting(E_ALL);

class Application extends Slim {

	public function __construct($settings) {

		parent::__construct($settings);


	}


	/**
	 * @param array $options
	 */
	protected function connectTemplateEngine(array $options) {

		$this->config('templates.path', $options['templates.path']);

		$this->view(new Twig());

		$this->view->parserOptions = array_merge($options, [
			'charset' => 'utf-8',
			'cache' => realpath('../templates/cache'),
			'auto_reload' => true,
			'strict_variables' => false,
			'autoescape' => false
		]);

		$this->view->parserExtensions = array(new TwigExtension());

	}

	protected function registerController(ControllerInterface $controllerObject) {

		$controllerObject->registerRoutes();

	}

}