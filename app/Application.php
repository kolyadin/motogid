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

		$cacheDir = realpath(__DIR__ . '/../var/cache/twig');

		if (!is_dir($cacheDir)){
			mkdir($cacheDir,0777,true);
		}

		$this->view->parserOptions = array_merge($options, [
			'charset' => 'utf-8',
			'cache' => realpath('../var/cache/twig'),
			'auto_reload' => true,
			'strict_variables' => false,
			'autoescape' => false
		]);


		$this->view->parserExtensions = array(new TwigExtension(),new \Twig_Extension_Debug());
	}

	protected function registerController(ControllerInterface $controllerObject) {

		$controllerObject->registerRoutes();

	}

}