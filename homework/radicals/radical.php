<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function radical_map($n){
    return sqrt($n);
}

$b = array_map("radical_map", $arr);
print_r($b);