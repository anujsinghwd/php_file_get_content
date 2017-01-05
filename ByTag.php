<?php 

$html = file_get_contents("website");

$dom = new DOMDocument();

$dom->loadHTML($html);

$nodes = $dom->getElementsByTagName('tagname');

foreach ($nodes as $node) {
    echo $node->nodeValue."<br>"; 
} 



 ?>