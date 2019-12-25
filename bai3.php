<?php
function phoneNumber($arr = [])
{
	$str = "(";
	for ($i=0; $i < sizeof($arr); $i++) { 
		$str .= $arr[$i];
		if ($i == 2) {
			$str .=") ";
		} elseif ($i == 5) {
			$str .="-";
		}
	}
	return $str;
}

$arr = [1,5,6,5,4,2,0,1,2,6];
echo phoneNumber($arr);