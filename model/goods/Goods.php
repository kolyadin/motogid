<?php
/**
 * Created by PhpStorm.
 * User: Aleksey Kolyadin
 * Date: 17.02.14
 * Time: 0:24
 */

namespace motogid\model\goods;
use motogid\model\content\Image;

/**
 * Товары (в том числе и запчасти)
 *
 * @Entity @HasLifecycleCallbacks
 * @Table( name="mg_goods" )
 */

class Goods
{
	/**
	 * У каждого производителя есть свой уникальный идентификатор
	 *
	 * @Id @Column(type="string", length=7)
	 * @GeneratedValue(strategy="CUSTOM")
	 * @CustomIdGenerator(class="\motogid\model\goods\GoodsIdentityGenerator")
	 */
	private $idHash;


	/**
	 * Фотография изображения
	 *
	 * @ManyToOne(targetEntity="\motogid\model\content\Image", cascade={"persist"})
	 * @JoinColumn(name="imageId", referencedColumnName="id")
	 */
	private $image;


	public function setImage(Image $image){
		$this->image = $image;
	}

	public function getImage(){
		return $this->image;
	}



}