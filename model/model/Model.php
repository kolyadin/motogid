<?php
/**
 * Created by PhpStorm.
 * User: Aleksey Kolyadin
 * Date: 17.02.14
 * Time: 0:24
 */

namespace motogid\model\model;

use motogid\app\helpers\ORMHelper;
use motogid\model\EntityInterface;
use motogid\model\content\Image;

/**
 * Модели байков
 *
 * @Entity @HasLifecycleCallbacks
 * @Table( name="mg_models" )
 */
class Model implements EntityInterface {

	public function __construct(){

		$this->setCreatedAt(time());

	}

	/**
	 * @param mixed $clutch
	 */
	public function setClutch($clutch) {
		$this->clutch = $clutch;
	}

	/**
	 * @return mixed
	 */
	public function getClutch() {
		return $this->clutch;
	}

	/**
	 * @param mixed $coolingSystem
	 */
	public function setCoolingSystem($coolingSystem) {
		$this->coolingSystem = $coolingSystem;
	}

	/**
	 * @return mixed
	 */
	public function getCoolingSystem() {
		return $this->coolingSystem;
	}

	/**
	 * @param mixed $createdAt
	 */
	public function setCreatedAt($createdAt) {
		$this->createdAt = $createdAt;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedAt() {
		return $this->createdAt;
	}

	/**
	 * @param mixed $cycleCount
	 */
	public function setCycleCount($cycleCount) {
		$this->cycleCount = $cycleCount;
	}

	/**
	 * @return mixed
	 */
	public function getCycleCount() {
		return $this->cycleCount;
	}

	/**
	 * @param mixed $cylinderCount
	 */
	public function setCylinderCount($cylinderCount) {
		$this->cylinderCount = $cylinderCount;
	}

	/**
	 * @return mixed
	 */
	public function getCylinderCount() {
		return $this->cylinderCount;
	}

	/**
	 * @param mixed $drive
	 */
	public function setDrive($drive) {
		$this->drive = $drive;
	}

	/**
	 * @return mixed
	 */
	public function getDrive() {
		return $this->drive;
	}

	/**
	 * @param mixed $engineType
	 */
	public function setEngineType($engineType) {
		$this->engineType = $engineType;
	}

	/**
	 * @return mixed
	 */
	public function getEngineType() {
		return $this->engineType;
	}

	/**
	 * @param mixed $engineVolume
	 */
	public function setEngineVolume($engineVolume) {
		$this->engineVolume = $engineVolume;
	}

	/**
	 * @return mixed
	 */
	public function getEngineVolume() {
		return $this->engineVolume;
	}

	/**
	 * @param mixed $frontBrake
	 */
	public function setFrontBrake($frontBrake) {
		$this->frontBrake = $frontBrake;
	}

	/**
	 * @return mixed
	 */
	public function getFrontBrake() {
		return $this->frontBrake;
	}

	/**
	 * @param mixed $frontSuspension
	 */
	public function setFrontSuspension($frontSuspension) {
		$this->frontSuspension = $frontSuspension;
	}

	/**
	 * @return mixed
	 */
	public function getFrontSuspension() {
		return $this->frontSuspension;
	}

	/**
	 * @param mixed $frontSuspensionTravel
	 */
	public function setFrontSuspensionTravel($frontSuspensionTravel) {
		$this->frontSuspensionTravel = $frontSuspensionTravel;
	}

	/**
	 * @return mixed
	 */
	public function getFrontSuspensionTravel() {
		return $this->frontSuspensionTravel;
	}

	/**
	 * @param mixed $frontWheelDimension
	 */
	public function setFrontWheelDimension($frontWheelDimension) {
		$this->frontWheelDimension = $frontWheelDimension;
	}

	/**
	 * @return mixed
	 */
	public function getFrontWheelDimension() {
		return $this->frontWheelDimension;
	}

	/**
	 * @param mixed $fuelCapacity
	 */
	public function setFuelCapacity($fuelCapacity) {
		$this->fuelCapacity = $fuelCapacity;
	}

	/**
	 * @return mixed
	 */
	public function getFuelCapacity() {
		return $this->fuelCapacity;
	}

	/**
	 * @param mixed $fuelControl
	 */
	public function setFuelControl($fuelControl) {
		$this->fuelControl = $fuelControl;
	}

	/**
	 * @return mixed
	 */
	public function getFuelControl() {
		return $this->fuelControl;
	}

	/**
	 * @param mixed $fuelSystem
	 */
	public function setFuelSystem($fuelSystem) {
		$this->fuelSystem = $fuelSystem;
	}

	/**
	 * @return mixed
	 */
	public function getFuelSystem() {
		return $this->fuelSystem;
	}

	/**
	 * @param mixed $height
	 */
	public function setHeight($height) {
		$this->height = $height;
	}

	/**
	 * @return mixed
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $ignition
	 */
	public function setIgnition($ignition) {
		$this->ignition = $ignition;
	}

	/**
	 * @return mixed
	 */
	public function getIgnition() {
		return $this->ignition;
	}

	/**
	 * @param mixed $length
	 */
	public function setLength($length) {
		$this->length = $length;
	}

	/**
	 * @return mixed
	 */
	public function getLength() {
		return $this->length;
	}

	/**
	 * @param mixed $minClearance
	 */
	public function setMinClearance($minClearance) {
		$this->minClearance = $minClearance;
	}

	/**
	 * @return mixed
	 */
	public function getMinClearance() {
		return $this->minClearance;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $rearBrake
	 */
	public function setRearBrake($rearBrake) {
		$this->rearBrake = $rearBrake;
	}

	/**
	 * @return mixed
	 */
	public function getRearBrake() {
		return $this->rearBrake;
	}

	/**
	 * @param mixed $rearBrakeDiameter
	 */
	public function setRearBrakeDiameter($rearBrakeDiameter) {
		$this->rearBrakeDiameter = $rearBrakeDiameter;
	}

	/**
	 * @return mixed
	 */
	public function getRearBrakeDiameter() {
		return $this->rearBrakeDiameter;
	}

	/**
	 * @param mixed $rearSuspension
	 */
	public function setRearSuspension($rearSuspension) {
		$this->rearSuspension = $rearSuspension;
	}

	/**
	 * @return mixed
	 */
	public function getRearSuspension() {
		return $this->rearSuspension;
	}

	/**
	 * @param mixed $rearWheelDimension
	 */
	public function setRearWheelDimension($rearWheelDimension) {
		$this->rearWheelDimension = $rearWheelDimension;
	}

	/**
	 * @return mixed
	 */
	public function getRearWheelDimension() {
		return $this->rearWheelDimension;
	}

	/**
	 * @param mixed $seatHeight
	 */
	public function setSeatHeight($seatHeight) {
		$this->seatHeight = $seatHeight;
	}

	/**
	 * @return mixed
	 */
	public function getSeatHeight() {
		return $this->seatHeight;
	}

	/**
	 * @param mixed $transmission
	 */
	public function setTransmission($transmission) {
		$this->transmission = $transmission;
	}

	/**
	 * @return mixed
	 */
	public function getTransmission() {
		return $this->transmission;
	}

	/**
	 * @param mixed $wheelbase
	 */
	public function setWheelbase($wheelbase) {
		$this->wheelbase = $wheelbase;
	}

	/**
	 * @return mixed
	 */
	public function getWheelbase() {
		return $this->wheelbase;
	}

	/**
	 * @param mixed $wheels
	 */
	public function setWheels($wheels) {
		$this->wheels = $wheels;
	}

	/**
	 * @return mixed
	 */
	public function getWheels() {
		return $this->wheels;
	}

	/**
	 * @param mixed $width
	 */
	public function setWidth($width) {
		$this->width = $width;
	}

	/**
	 * @return mixed
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * @param mixed $year
	 */
	public function setYear($year) {
		$this->year = $year;
	}

	/**
	 * @return mixed
	 */
	public function getYear() {
		return $this->year;
	}
	/**
	 * У каждой модели свой идентификатор
	 *
	 * @Id @GeneratedValue @Column(name="id", type="integer")
	 */
	private $id;

	/**
	 * Время внесения изображения в БД (unix timestamp)
	 *
	 * @Column(type="integer", length=11)
	 */
	private $createdAt;

	/**
	 * Полное название модели
	 *
	 * @Column(type="string", length=140)
	 */
	private $name;

	/**
	 * @param Image[] $images
	 */
	public function setImages(array $images) {
		$this->images = $images;
	}

	/**
	 * @return Image[]
	 */
	public function getImages() {
		return $this->images;
	}

	/**
	 * Изображения модели
	 *
	 * @ManyToMany(targetEntity="\motogid\model\content\Image", cascade={"persist","remove"})
	 * @JoinColumn(name="imageId", referencedColumnName="id")
	 */
	private $images;

	/**
	 * @Column(type="integer", length=4)
	 */
	private $year;

	/**
	 * Тип двигателя
	 *
	 * @Column(type="string", length=250)
	 */
	private $engineType;

	/**
	 * Число тактов
	 *
	 * @Column(type="integer", length=10)
	 */
	private $cycleCount;

	/**
	 * Объем двигателя, см3
	 *
	 * @Column(type="integer", length=10)
	 */
	private $engineVolume;

	/**
	 * Количество цилиндров
	 *
	 * @Column(type="integer", length=10)
	 */
	private $cylinderCount;

	/**
	 * Топливная система
	 *
	 * @Column(type="string", length=250)
	 */
	private $fuelSystem;

	/**
	 * Система охлаждения
	 *
	 * @Column(type="string", length=250)
	 */
	private $coolingSystem;

	/**
	 * Зажигание
	 *
	 * @Column(type="string", length=250)
	 */
	private $ignition;

	/**
	 * Контроль топлива
	 *
	 * @Column(type="string", length=250)
	 */
	private $fuelControl;

	/**
	 * Сцепление
	 *
	 * @Column(type="string", length=250)
	 */
	private $clutch;

	/**
	 * Коробка передач
	 *
	 * @Column(type="string", length=250)
	 */
	private $transmission;

	/**
	 * Привод
	 *
	 * @Column(type="string", length=250)
	 */
	private $drive;

	/**
	 * Передняя подвеска
	 *
	 * @Column(type="string", length=250)
	 */
	private $frontSuspension;

	/**
	 * Ход передней подвески
	 *
	 * @Column(type="string", length=250)
	 */
	private $frontSuspensionTravel;

	/**
	 * Задняя подвеска
	 *
	 * @Column(type="string", length=250)
	 */
	private $rearSuspension;

	/**
	 * Диски
	 *
	 * @Column(type="string", length=250)
	 */
	private $wheels;

	/**
	 * Размерность переднего колеса
	 *
	 * @Column(type="string", length=250)
	 */
	private $frontWheelDimension;

	/**
	 * Размерность заднего колеса
	 *
	 * @Column(type="string", length=250)
	 */
	private $rearWheelDimension;

	/**
	 * Передний тормоз
	 *
	 * @Column(type="string", length=250)
	 */
	private $frontBrake;

	/**
	 * Задний тормоз
	 *
	 * @Column(type="string", length=250)
	 */
	private $rearBrake;

	/**
	 * Диаметр заднего тормоза
	 *
	 * @Column(type="string", length=250)
	 */
	private $rearBrakeDiameter;

	/**
	 * Длина (мм)
	 *
	 * @Column(type="integer", length=100)
	 */
	private $length;

	/**
	 * Ширина (мм)
	 *
	 * @Column(type="integer", length=100)
	 */
	private $width;

	/**
	 * Высота (мм)
	 *
	 * @Column(type="integer", length=100)
	 */
	private $height;

	/**
	 * Высота по седлу (мм)
	 *
	 * @Column(type="integer", length=100)
	 */
	private $seatHeight;

	/**
	 * Минимальный дорожный просвет (мм)
	 *
	 * @Column(type="integer", length=100)
	 */
	private $minClearance;

	/**
	 * Колесная база (мм)
	 *
	 * @Column(type="integer", length=100)
	 */
	private $wheelbase;

	/**
	 * Вместимость бензобака (в литрах)
	 *
	 * @Column(type="integer", length=100)
	 */
	private $fuelCapacity;


	/**
	 * @return \Doctrine\ORM\EntityRepository
	 */
	static public function getRepository() {
		return ORMHelper::getRepository('\\motogid\\model\\model\\Model');
	}


}