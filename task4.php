<?php
$a = '22123';
$b = '45627189222123654798993';
if(checkNum($a, $b)){
    echo 'yes';
} else {
    echo 'no';
}

function checkNum($a, $b){
    $pos =0;
    for($i = 0; $i < strlen($a); $i++) {
        $pos = strpos($b, $a[$i], $pos);
        if($pos === false){
            return false;
        }
        $pos++;
    }
    return true;
}