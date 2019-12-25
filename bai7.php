<?php
$arr = ['u','e','o','a','i','U','E','O','A','I'];

function countVowel($str = '',$arr)
{
	$count = 0;
	for ($i=0; $i < strlen($str); $i++) { 
		if(in_array($str[$i], $arr)) {
			$count++;
		}
	}
	return $count;
}

echo countVowel('truy vu ngoc',$arr);