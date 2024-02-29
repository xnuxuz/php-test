<?php

$randomInteger = array(1,6,4,7,3);

function firstValue($array){
    $value = 0;
    $nextArr = 1;
    for($i = 0; $i < count($array)-$nextArr; $i++){
        if($array[$i] > $array[$nextArr]){
            $value = [$array[$i]];
        }
        else{
            $value = [$array[$nextArr]];
        }
    }
    return $value;
}

function secondValue($array){
    sort($array);
    return $array[count($array)-2];
}

echo secondValue($randomInteger);
?>