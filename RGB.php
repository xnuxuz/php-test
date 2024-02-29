<?php

$color = array('Merah', 'Kuning', 'Hijau');

function rambu_rambu($color, $i){
    $i = $i % count($color);
    return $color[$i];
}

for($i=0; $i<10; $i++){
    echo rambu_rambu($color, $i);
}
?>