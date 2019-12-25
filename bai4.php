<?php
function backSpace($str = '', $pos)
{
	return substr($str,0, - (strlen($str) - $pos+1)) . substr($str, $pos+1);
}

function doThis($str = '')
{
	while (strpos($str, '#') != false) {
		$str = backSpace($str,strpos($str, '#'));
	}
	return $str;
}

$str = "abfasc##ac##";
echo doThis($str);
