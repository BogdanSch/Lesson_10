<?php

$numbers = [
    1, -43, 34, 21, -3, 1, 45, -1232, 0, 5, -432
];

function filter_positives($var){
    return $var > 0;
}
function reduce_product($mult = 1, $var){
    $mult *= $var;
    return $mult;
}
function positive_sum($array){
    $array = array_filter($array, "filter_positives");
    return array_reduce($array, "reduce_product", 1);
}

print_r(positive_sum($numbers));