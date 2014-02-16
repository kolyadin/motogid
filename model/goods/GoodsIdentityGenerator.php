<?php

namespace motogid\model\goods;

use Doctrine\ORM\EntityManager,
	Doctrine\ORM\Id\AbstractIdGenerator;

class GoodsIdentityGenerator extends AbstractIdGenerator {
	static $cache = array();

	function generate(EntityManager $em, $entity) {
		$hash = $this->generateIdHash();

		$try = $em->getRepository('motogid\\model\\goods\\Goods')->findOneBy(['idHash' => $hash]);

		if ($try !== null) {
			return $this->generate($em, $entity);
		}

		return $hash;
	}

	private function generateIdHash() {
		$str = str_shuffle('qwertyuiopasdfghjklzxcvbnm1234567890');
//		$str = str_shuffle('1234567890');

		return substr($str, 0, 7);
	}
}