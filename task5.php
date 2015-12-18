<?php
//$str = 'aababbabbbabbbbabbbbbabbbbbbabbbbbbbabbbbbbbbabbbbbbbbbabbbbbbbbbbabbbbbbbbbbb';
$str = '111112111112111112';
//$str = 'aaaaaaaaaaaaaaaaaa';
if(checkSequence($str)){
    echo 'is periodic sequence';
} else {
    echo 'is not periodic sequence';
}

function checkSequence($str){
    $lstr = strlen($str);
    for($l = 1; $l <= $lstr/2; $l++) {
        $podstr = substr($str, 0, $l);
        $i = $l; 
		$flag = true;
        while ($i < $lstr) {
            if ($podstr !== substr($str, $i, $l)) {
                $flag = false;
                break;
            }
            $i += $l;
        }
        if($flag) return true;
    }
    return false;
}
