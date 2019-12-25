<?php  
    function longestWord($word = ''){

        $word = explode(" ",$word);
        $max=0;
        for ($i=0; $i < sizeof($word); $i++){ 
        	if(strlen($word[$i]) > $max){
        		$max = strlen($word[$i]);
        	}
        }
        for ($i=0; $i < sizeof($word); $i++){ 
        	if(strlen($word[$i]) == $max){
        		return $word[$i];
        	}
        }
	}
