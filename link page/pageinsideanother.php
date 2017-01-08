<?php 
	for($i=23;$i<=239;$i+23)
	{
			$url = "http://www.megavenues.com/delhi/wedding-halls/".$i;
			$html = file_get_contents($url);
			$weddinghall = new DOMDocument();
			libxml_use_internal_errors(TRUE);
			
				if (!empty($html))
					{ 
						$weddinghall->loadHTML($html);
						libxml_clear_errors(); //remove errors for html
						$weddinghall_xpath = new DOMXPath($weddinghall);
						$articles = $weddinghall_xpath->query('//h2[@class="title block_margine"]/a');
							
							foreach($articles as $node)
							{
								echo $arr = $node->getattribute('href');
								//echo "<br>";
								/*$newurl = $arr;
								
								$newhtml = file_get_contents($newurl);
								$Newweddinghall = new DOMDocument();
								libxml_use_internal_errors(TRUE);
						
									if (!empty($newhtml))
									{
											$Newweddinghall->loadHTML($newhtml);
											libxml_clear_errors(); //remove errors for html
											$Newweddinghall_xpath = new DOMXPath($Newweddinghall);		
											$venue = $Newweddinghall_xpath->query('//h1[@class="detail_venue_name"]');	
											$address = $Newweddinghall_xpath->query('//address[@class="detail_add"]');		
											$detail = $Newweddinghall_xpath->query('//div[@class="detail_add"]');
											
												foreach($venue as $newnode)
												{
													echo $a++;
													echo $venue = $newnode->nodeValue;
													echo "<br>";
													
												}
												
												foreach($address as $newnode1)
												{
													echo $address = $newnode1->nodeValue;
													echo "<br>";
													
												}	
												
												foreach($detail as $newnode2)
												{
													echo $detail = $newnode2->nodeValue;
													echo "<br>"
												}		
												
									}*/
									
							}			
													
					}	
	}
	
		
?>

