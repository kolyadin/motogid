<?php
/**
 * Created by PhpStorm.
 * User: Aleksey Kolyadin
 * Date: 17.02.14
 * Time: 0:19
 */

namespace motogid\app\helpers;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\Configuration;

class DBALHelper {

	public static function getDBAL() {

		$DBALConfig = new Configuration();

		$config = ConfigHelper::getConfig();

		return DriverManager::getConnection($config['mysql'],$DBALConfig);
	}
}