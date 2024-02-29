<?php

function countChar($char){
    $arrChar = array();
    for($i = 0; $i < strlen($char); $i++){
        $count = 1;
        for($z = 0; $z < strlen($char); $z++)
        if($char[$z] == $char[$i]){
            array_push($arrChar, array($char[$z] => $count++));
        }
    }
    var_dump($arrChar);
}   
countChar('Testtest');
?>