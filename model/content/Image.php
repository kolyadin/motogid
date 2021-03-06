<?php
/**
 * Created by PhpStorm.
 * User: Aleksey Kolyadin
 * Date: 17.02.14
 * Time: 0:24
 */

namespace motogid\model\content;

use motogid\app\helpers\ORMHelper;
use motogid\model\EntityInterface;

/**
 * Фотки
 *
 * @Entity @HasLifecycleCallbacks
 * @Table( name="mg_images" )
 */
class Image implements EntityInterface {
	/**
	 * У каждого изображения есть свой уникальный ID
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
	 * Название изображения
	 *
	 * @Column(type="string", length=140)
	 */
	private $name;

	/**
	 * Название изображения
	 *
	 * @Column(type="string", length=50)
	 */
	private $path;


	public function __construct() {
		$this->createdAt = time();

	}

	public function getId() {
		return $this->id;
	}

	public function getCreatedAt($format = "d.m.Y H:i:s") {
		return date($format, $this->createdAt);
	}

	public function getName() {
		return $this->name;
	}

	public function getPath(){
		return $this->path;
	}

	public function getFilePath(){
		return ImageFactory::getUploadPath($this->createdAt) . $this->getPath();
	}

	public function getUrl(){
		return implode('/',[
			'/upload',
			ImageFactory::getDatePath($this->createdAt),
			$this->getPath()
		]);
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setPath($path){
		$this->path = $path;
	}

	static public function getRepository() {
		return ORMHelper::getRepository('\\motogid\\model\\content\\Image');
	}


}