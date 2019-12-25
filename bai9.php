<?php
function exchange(&$my_array= [], &$ohter_array = [])
{
	for ($i=0; $i < sizeof($my_array); $i++) { 
		$temp = $my_array[$i];
		$my_array[$i] = $ohter_array[sizeof($my_array) -$i -1];
		$ohter_array[sizeof($my_array) -$i -1] = $temp;
	}
}

$my_array = ['1', '2', '3','4','5'];
$ohter_array = ['a', 'b', 'c','d','e'];
exchange($my_array,$ohter_array);
var_dump($my_array); 
echo "<br>";
var_dump($ohter_array);