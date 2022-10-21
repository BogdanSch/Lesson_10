<?php

$array = [
    "small",
    "big",
    "middle",
    "large",
    "huge",
    "tiny",
    "massive"
];

function cmp_reverse($a, $b){
    if(strlen($a) > strlen($b)) return -1;
    elseif (strlen($a) == strlen($b)) return 0;
    return 1;
}

function sort_array_reverse($array){
    uasort($array, "cmp_reverse");
    return $array;
}

$array = sort_array_reverse($array);

print_r($array);