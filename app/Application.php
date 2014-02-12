<?php

namespace motogid\app;

use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

class Application extends Slim {


	/**
	 * @param array $options
	 */
	protected function connectTemplateEngine(array $options) {

		$this->config('templates.path', $options['templates.path']);

		$this->view(new Twig());

		$this->view->parserOptions = array_merge($options,[
			'charset' => 'utf-8',
			'cache' => realpath('../templates/cache'),
			'auto_reload' => true,
			'strict_variables' => false,
			'autoescape' => false
		]);

		$this->view->parserExtensions = array(new TwigExtension());

	}

}