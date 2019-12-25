<?php
function findNumber($str = '',$pos)
{
	$number = "";
	for ($i=$pos; $i < strlen($str); $i++) { 
		if (ord($str[$i]) > 47
			&& ord($str[$i]) <58) {
				$number .= $str[$i];
		} else {
			break;
		}
	}
	return $number;
}
function numberInString($str = '')
{
	$number = "-1";
	for ($i=0; $i < strlen($str); $i++) { 
		if (ord($str[$i]) > 47
			&& ord($str[$i]) < 58) {
				if ((int)(findNumber($str, $i)) > (int)($number)) {
					$number = findNumber($str, $i);
				}
		}
	}
	if ($number == "-1") {
		return "No Number !";
	} else {
		return $number;
	}
}

echo (numberInString("541as999faf2150"));

