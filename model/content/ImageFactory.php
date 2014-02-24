<?php
/**
 * Created by PhpStorm.
 * User: Aleksey Kolyadin
 * Date: 24.02.14
 * Time: 3:22
 */

namespace motogid\model\content;


use motogid\app\helpers\ORMHelper;

class ImageFactory {

	public static function getDatePath($time){
		$datePath = date('Y/m/d', $time);

		return $datePath;
	}

	public static function getUploadPath($time) {
		return __DIR__.'/../../htdocs/upload/'.self::getDatePath($time).'/';
	}

	/**
	 * @param $filepath
	 * @return Image
	 */
	public static function createFromUpload($filepath){

		$orm = ORMHelper::getORM();

		$path = self::getUploadPath(time()) .  sha1(implode('',[microtime(1),$filepath,uniqid()])) . strrchr($filepath,'.');

		if (!is_dir(dirname($path))){
			mkdir(dirname($path),01777,true);
			chmod(dirname($path),01777);
		}

		copy($filepath,$path);



		/*$image = new Image();
		$image->setName('Фотка 2');
		$orm->persist($image);*/

		$image = new Image();
		$image->setName('');
		$image->setPath(basename($path));

		$orm->persist($image);
		$orm->flush();

		return $image;

	}

} 