<?php
function mostPopularChar($str = '')
{
	$temp = [];
	$arr = [];
	for ($i=0; $i < strlen($str); $i++) { 
		if (!in_array($str[$i], $temp)) {
			array_push($temp, $str[$i]);
			$s=1;
			for ($j=$i+1; $j < strlen($str); $j++) { 
				if($str[$i] == $str[$j]) {
					$s++;
				}
			}
			array_push($arr, $s);
		}
	}
	$max = max($arr);
	$count=0;
	$result;
	for ($i=0; $i < sizeof($temp); $i++) { 
		if ($arr[$i] == $max) {
			$count++;
			$result = $temp[$i];
		}
	}
	if ($count != 1) {
		$result = "No most popular char.";
	}
	return $result;
}
$a = ['c','b','c','a','a'];
echo mostPopularChar("caasvsbsabbbccc");