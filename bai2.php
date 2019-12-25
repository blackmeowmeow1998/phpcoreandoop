<?php  
function letterChanges($str = '')
{
	$special = [97, 105, 117, 101, 111];
	for ($i=0; $i < strlen($str); $i++) { 
		if(ord($str[$i]) > 64 && ord($str[$i]) < 123) {
			$str[$i] = chr(ord($str[$i]) + 1);
		}
		if(in_array(ord($str[$i]), $special)){
			$str[$i] = chr(ord($str[$i]) - 32);
		}
	}	
	return $str;
}
echo letterChanges("truy vu abcd");
