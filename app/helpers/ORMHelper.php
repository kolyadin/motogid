<?php
/**
 * Created by PhpStorm.
 * User: Aleksey Kolyadin
 * Date: 17.02.14
 * Time: 0:19
 */

namespace motogid\app\helpers;

use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;

class ORMHelper {

	public static function getORM() {
		$ORMConfig = new Configuration();

		$driverImpl = $ORMConfig->newDefaultAnnotationDriver(__DIR__ . '/../../model');
		$ORMConfig->setMetadataDriverImpl($driverImpl);

		$ORMConfig->setProxyDir(__DIR__ . '/../../var/cache/doctrine/Proxy');
		$ORMConfig->setProxyNamespace('Proxies');

		$config = ConfigHelper::getConfig();

		return EntityManager::create($config['mysql'], $ORMConfig);
	}

	/**
	 * @param $entity
	 * @return \Doctrine\ORM\EntityRepository
	 */
	public static function getRepository($entity){

		return self::getORM()->getRepository($entity);

	}
}