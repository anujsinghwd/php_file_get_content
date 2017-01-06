<?php 

	$url = "url paste here";

	$html = file_get_contents($url);

	$weddinghalls = new DOMDocument();

		if (!empty($html)) {
			$weddinghalls->loadHTML($html);
			libxml_clear_errors(); //remove errors for html
			$weddinghalls_xpath = new DOMXPath($weddinghalls);
			// fields define here
			$articles = $weddinghalls_xpath->query('//h2[@class="title block_margine"]/a');

				foreach($articles as $node){
					//echo $a++;
					echo $articles = $node->nodeValue;
					//echo "<br>";
					
				}
		}

}








?>