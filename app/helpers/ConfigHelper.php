<?php
/**
 * Created by PhpStorm.
 * User: Aleksey Kolyadin
 * Date: 17.02.14
 * Time: 0:39
 */

namespace motogid\app\helpers;


class ConfigHelper {

	public static function getConfig(){

		return include __DIR__.'/../config/config.php';

	}

} 