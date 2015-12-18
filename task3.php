<?php
//$plt = array();
$A = array('a', 'b', 'c', 'd');
$l = count($A);
echo "<pre>";
for ($i = 0; $i < $l; $i++) {
    getPlacement($i, $A);
}
//var_dump($plt);

function getPlacement($i, $A, $B = array()){
    $B[] = $A[$i];
    print_r($B);
    $l = count($A);
    $n = count($B);
    if($n < $l){
        for($j = 0; $j < $l; $j++){
            if(!in_array($A[$j], $B)){
                getPlacement($j, $A, $B);
            }
        }
    }
}
