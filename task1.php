<?php
//$str = '{(a+b)*[a+2c]+[(3*b-4)*(a+2c)]}';
$str = '{((a(bc))([]({})';
echo $str . '<br><br>';
echo brackets($str);


function brackets($str){
    $br = array('(' => ')', '[' => ']', '{' => '}');
    $l = strlen($str);
    $stack = array();
    for($i = 0; $i < $l; $i++){
        foreach($br as $op => $cl){
            if($str[$i] == $op){
                array_push($stack, $op);
            } else if($str[$i] == $cl){
                $s = array_pop($stack);
                if($br[$s] !== $cl){
                    return 'false'.', i = '.$i;
                }
            }
        }
    }
    if(empty($stack)){
        return 'true';
    } else {
        return 'false'.', i = '.$i;
    }
}