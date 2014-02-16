<?php

namespace Motogid\Parsers;

use phpQuery;

class STGParser extends CommonParser implements InterfaceParser{

	//Без последнего слэша (/)
	const selfHost = 'http://stores.sportbiketrackgear.com';

	const helmetsUrl = '/Categories.bok?category=Motorcycle+Helmets%3ACloseout';
	const suitsUrl   = '/Categories.bok?category=Leather+Race+Suits%3AShow+All';
	const jacketsUrl = '/Categories.bok?category=Leather+Motorcycle+Jackets%3AShow+All';

	private $samplePq;

	function runJackets(){



	}

	function getJackets(){

		$this
			->startUrl(self::jacketsUrl)
			->pagesWalker('.searchResultsInner2 a', function($pq){

				$this->pagesWalker('div.long_item > div > a', function($pq){

					echo self::selfHost . $pq->attr('href') , "\n";

			});

		});


	}




}