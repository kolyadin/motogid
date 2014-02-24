<?php

namespace motogid\app\controllers\manager;

use motogid\app\controllers\CommonController;
use motogid\app\controllers\ControllerInterface;
use motogid\app\helpers\ORMHelper;
use motogid\model\content\Image;
use motogid\model\goods\Goods;

class ModelController extends CommonController implements ControllerInterface {
	public function registerRoutes() {

		$this
			->getApp()
			->map('/model/create', [$this, 'modelManager'])
			->conditions(['page' => '[1-9][0-9]*'])
			->via('GET','POST');

	}

	public function modelManagerPost(){

	}

	public function modelManagerGet(){
		$this->getApp()->view()->display('model/Model.twig');
	}

	public function modelManager(){

		switch ($this->getApp()->request()->getMethod()){
			case 'GET':
				$this->modelManagerGet();
				break;
			case 'POST':
				$this->modelManagerPost();
				break;
		}

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