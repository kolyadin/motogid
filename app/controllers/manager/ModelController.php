<?php

namespace motogid\app\controllers\manager;

use motogid\app\controllers\CommonController;
use motogid\app\controllers\ControllerInterface;
use motogid\app\helpers\ORMHelper;
use motogid\model\content\Image;
use motogid\model\model\Model;
use motogid\model\goods\Goods;

class ModelController extends CommonController implements ControllerInterface {
	public function registerRoutes() {

		$this
			->getApp()
			->get('/model/:modelId', [$this, 'modelDetails'])
			->conditions(['modelId' => '[1-9][0-9]*']);

		$this
			->getApp()
			->get('/model/list', [$this, 'modelList']);

		$this
			->getApp()
			->map('/model/create', [$this, 'modelManager'])
			->conditions(['page' => '[1-9][0-9]*'])
			->via('GET', 'POST');

	}

	/**
	 * @param int $modelId
	 */
	public function modelDetails($modelId) {

		$model = Model::getRepository()->findOneBy(['id' => $modelId]);

		$this->display('model/ModelForm.twig', ['model' => $model]);

	}

	public function modelList() {

		$orm = ORMHelper::getORM();

		/** @var Model[] $models */
		$models = Model::getRepository()->findAll();

		$this->display('model/ModelList.twig', [
			'models' => $models
		]);

	}

	public function modelManagerPost() {

		$orm = ORMHelper::getORM();
		$req = $this->getApp()->request();

		$editMode = ($req->post('editMode') && $req->post('modelId')) ? $req->post('modelId') : false;

		if ($editMode) {
			$model = Model::getRepository()->findOneById($editMode);
		} else {
			$model = new Model();
		}

		$model->setName($req->post('name'));
		$model->setYear($req->post('year'));

		$model->setEngineType($req->post('engineType'));
		$model->setCycleCount($req->post('cycleCount'));
		$model->setEngineVolume($req->post('engineVolume'));
		$model->setCylinderCount($req->post('cylinderCount'));
		$model->setFuelSystem($req->post('fuelSystem'));
		$model->setCoolingSystem($req->post('coolingSystem'));
		$model->setIgnition($req->post('ignition'));
		$model->setFuelControl($req->post('fuelControl'));
		$model->setClutch($req->post('clutch'));
		$model->setTransmission($req->post('transmission'));
		$model->setDrive($req->post('drive'));

		$model->setFrontSuspension($req->post('frontSuspension'));
		$model->setFrontSuspensionTravel($req->post('frontSuspensionTravel'));
		$model->setRearSuspension($req->post('rearSuspension'));
		$model->setWheels($req->post('wheels'));
		$model->setFrontWheelDimension($req->post('frontWheelDimension'));
		$model->setRearWheelDimension($req->post('rearWheelDimension'));
		$model->setFrontBrake($req->post('frontBrake'));
		$model->setRearBrake($req->post('rearBrake'));
		$model->setRearBrakeDiameter($req->post('rearBrakeDiameter'));

		$model->setLength($req->post('length'));
		$model->setWidth($req->post('width'));
		$model->setHeight($req->post('height'));
		$model->setSeatHeight($req->post('seatHeight'));
		$model->setMinClearance($req->post('minClearance'));
		$model->setWheelbase($req->post('wheelbase'));
		$model->setFuelCapacity($req->post('fuelCapacity'));

		if ($editMode) {
			$orm->merge($model);
		} else {
			$orm->persist($model);
		}

		$orm->flush();

		$this->getApp()->redirect(sprintf('/manager/model/%u',$model->getId()));

	}

	public function modelManagerGet() {
		$this->display('model/ModelForm.twig');
	}

	public function modelManager() {

		switch ($this->getApp()->request()->getMethod()) {
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