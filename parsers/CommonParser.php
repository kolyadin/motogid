<?php

namespace motogid\parsers;

class CommonParser{

	private $lastPq;


	function parse(){
		echo 123;
	}



	protected function getTagStructure(){

		$html = <<<EOL
<body>

</body>
EOL;


		$a = \phpQuery::newDocument($html);

	}


	protected function startUrl($url){

		$this->lastPq = \phpQuery::newDocument(
			$this->curlDownload(STGParser::selfHost . $url, 5)
		);

		return $this;

	}

	protected function pagesWalker($selector, $callback){

		//Ходим по постраничке, если она есть
		foreach ($this->lastPq->find($selector) as $a){

			$callback(\phpQuery::pq($a));

		}

	}


	protected function loadURL($url){
		return \phpQuery::newDocument(
			$this->curlDownload($url, 5)
		);
	}

	protected function curlDownload($href, $timeout = 300, $post = null, $cookie = null) {
		$baseURL = $href;

		//$href = sprintf('http://proxy5.seo.traf.spb.ru?s=d795684fa6143f415e21d7c195acadee&timeout=%u&url=%s', $timeout-1, urlencode($href));
		//$href = sprintf($href);

		$curl = curl_init();
		if ($curl) {

			curl_setopt($curl, CURLOPT_URL, $href);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
			curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0');
			if ($post) {
				curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
			}
			// cookies
			if ($cookie) {
				$cookies = '';
				foreach ($cookie as $key => $value) {
					$cookies .= sprintf('%s=%s; ', $key, $value);
				}
				$cookies = substr($cookies, 0, -2);
				curl_setopt($curl, CURLOPT_COOKIE, $cookies);
			}

			$data = curl_exec($curl);
			curl_close($curl);

			return $data;
		}
	}


}