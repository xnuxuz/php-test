<?php

function countChar($char){
    $arrChar = array();
    for($i = 0; $i < strlen($char); $i++){
        $currentChar = $char[$i];
        if($arrChar[$currentChar] != $char[$i]){
            $arrChar[$currentChar]++;
        }else{
            $arrChar[$currentChar] = 1;
        }
    }
    var_dump($arrChar);
}   

countChar('Testes');
?>