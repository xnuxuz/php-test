<?php

function countChar($char){
    $arrChar = array();
    for($i = 0; $i < strlen($char); $i++){
        $currentChar = $char[$i];
        if(isset($arrChar[$currentChar])){
            $arrChar[$currentChar]++;
        }else{
            $arrChar[$currentChar] = 1;
        }
    }
    var_dump($arrChar);
}   

countChar('Testes');
?>