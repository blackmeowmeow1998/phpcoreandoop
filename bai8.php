<?php
function addCommands($str = "")
{
	if(strpos($str, ".") != false) {
		$pos = strpos($str, ".") - 3;
	} else {
		$pos = strlen($str) - 3;
	}
	while ($pos >= 1) {		
		for ($i=strlen($str); $i > $pos + 1; $i--) { 
			$str[$i] = $str[$i-1];
		}
		$str[$pos] = ",";
		$pos -= 3;
	}
	

	return $str;
}

echo addCommands("5245125563.54");