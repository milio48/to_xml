<?php
//example data supported
// you must know about xml rules
//$me = array("friend"=>"2551", "gf"=>"48", "ex"=>"69");


function to_xml($file, $data){
	$result = '';
	if(@$data['0']){
		$report = 'array type not supported';
	} else {
		$xml    = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
			foreach($data as $x => $x_value) {
		    $result .= "\t" . '<' . $x . '>' .  $x_value . '</' . $x . '>' . PHP_EOL;
			}

		$opXml = '<' . $file . '>' . PHP_EOL;
		$clXml = '</' . $file . '>';
		if(file_put_contents($file . '.xml', $xml . $opXml . $result . $clXml)){
			$report  = 'created';
		}else{
			$report = 'failed';
		}
	}
	return $report;
}

//echo to_xml('list2', $me);
