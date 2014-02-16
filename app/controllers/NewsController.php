<?php

namespace motogid\app\controllers;
use motogid\app\helpers\ORMHelper;
use motogid\model\content\Image;
use motogid\model\goods\Goods;

/**
 * Class NewsController
 * @package motogid\app\controllers
 */
class NewsController extends CommonController implements ControllerInterface {

	public function registerRoutes() {

		$this->getApp()->get('/news(/page:page)', [$this, 'newsList']);

	}

	public function newsList($page = null) {

		$orm = ORMHelper::getORM();

		$good = new Goods();

			/*$image = new Image();
			$image->setName('Фотка 2');
			$orm->persist($image);*/


		$image = Image::getRepository()->findOneById(1);

		$good->setImage($image);
		$orm->merge($good);
		$orm->flush();

	}
}