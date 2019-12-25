<?php  
function longestWord($word = '')
{
    $arr = str_word_count($word,1); 
    $result = $arr[0];
    for ($i=1; $i < sizeof($arr); $i++) { 
        if (strlen($arr[$i]) > strlen($result)) {
            $result = $arr[$i];
        }
    }
    return $result;
}

echo longestWord("alo blo.xelo afsavav.fafsafsafsaf");

