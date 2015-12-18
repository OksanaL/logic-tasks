<?php
$N = 0; $i = 1; $A = array();
while($N < 100){
    if(сheckPrimeNum($i)){
        $A[$N] = $i;
        echo $N.' => '.$i.'<br>';
        $N++;
    }
    $i++;
}
//var_dump($A);

function сheckPrimeNum($i)
{
    if($i == 2){
        return true;
    }
    if($i % 2 !== 0){
        $j = 3;
        while($j <= sqrt($i)){
            if($i % $j == 0){
                return false;
            }
            $j++;
        }
        return true;
    }
    return false;
}