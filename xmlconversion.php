<?php

$path = file_get_contents('http://www.goalserve.com/getfeed/519d873430e44ad39914c9a38dd3b6e4/f1/f1-results');
$xml = json_decode(json_encode((array) simplexml_load_string($path)), 1);
echo '<pre>';
print_r($xml);


?>
