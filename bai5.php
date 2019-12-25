<?php
	$array;
	function findNumbers($str = '', $pos) {
		$new_pos = $pos++;
		while (ord($str[$new_pos]) > 47 && ord($str[$new_pos]) < 58) {
			$new_pos++;
		}
		return $new_pos;
	}
	function numberInString($str = '') {
		for ($i=0; $i < strlen($str); $i++) { 
			if (ord($str[$i]) > 47 && ord($str[$i]) < 58) {
				$new_pos = findNumbers($str,$i);		
				$strnew = substr($str, $i-1, -(strlen($str) - $new_pos));
				array_push($array, $strnew);
				$i = $new_pos-1;
			}
		}
	}
	$str = '23sgs32fe';
	numberInString($str);
	var_dump($array);