<?php
$arr = ['u','e','o','a','i','U','E','O','A','I'];
$vowel = [];

function buildVowel($str = '',$arr, &$vowel)
{
	for ($i=0; $i < strlen($str); $i++) { 
		if(in_array($str[$i], $arr)) {
			array_push($vowel, ord($str[$i]));
		}
	}
}


function reveserVowelInString($str = '', $arr, $pos, $vowel) 
{
	for ($i=0; $i < strlen($str); $i++) { 
		if(in_array($str[$i], $arr)) {
			$str[$i] = chr($vowel[$pos]);
			$pos--;
		}
	}
	return $str;
}

$str = "Reverse Vowels In A String";
buildVowel($str, $arr,$vowel);
$pos = sizeof($vowel) - 1;
echo reveserVowelInString($str,$arr, $pos, $vowel);