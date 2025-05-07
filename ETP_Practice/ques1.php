<?php

function reverseArray($array){
    $reversedArray = [];
    $count = count($array);

    for($i = $count - 1; $i >= 0; $i--){
        $reversedArray[] = $array[$i];
    }

    return $reversedArray;
}


$array = [1, 2, 3, 4, 5];
$reversedArray = reverseArray($array);

print_r($reversedArray);

?>