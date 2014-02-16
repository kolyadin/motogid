<?php

namespace Motogid\Parsers;

class STGParserTester extends CommonParser{

	private $url,$pq;

	private $lastPq;

	function __construct($url){

		$this->url = $url;

		$this->pq = $this->loadURL($url);

	}

	function getHtmlSample($selector){

		$this->lastPq = $this->pq->find($selector);

		return $this;

	}

	function expects($htmlPseudo){

		$str = $this->lastPq->html();

		$str = preg_replace_callback('@\>([^\>\<]+)\<@isU',function($matches){return '><';},$str);

		$str = preg_replace('@\<\/[^>]+\>@is', '', $str);

		$str = preg_replace_callback('/<\s*(\w+) [^>]+>/i',function($matches){return '<' . $matches[1] . '>';},$str);

		if (trim($htmlPseudo) !== trim($str)) throw new \Exception('Html mismatch found');

	}

}