<?php
//$str = 'aababbabbbabbbbabbbbbabbbbbbabbbbbbbabbbbbbbbabbbbbbbbbabbbbbbbbbbabbbbbbbbbbb';
$str = '112112112';
//$str = 'aaaaaaaaaaaaaaaaaa';
if(checkSequence($str)){
    echo 'is periodic sequence';
} else {
    echo 'is not periodic sequence';
}

function checkSequence($str){
    $pos = strpos(substr($str, 1), $str[0])+1;

    $podstr = substr($str, 0, $pos);
    $lstr = strlen($str);
    if($lstr % $pos !== 0){
        return false;
    }
    $i = $pos;
    while($i < $lstr){
        if($podstr !== substr($str, $i, $pos)){
            return false;
        }
        $i += $pos;
    }

    return true;
}

