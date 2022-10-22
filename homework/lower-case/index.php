<?php

$phraces = [
    "THIS TEXT IS IN UPPER REGISTER",
    "BORING WORK TO FILL IN ARRAYS",
    "Normal text",
    "lower case text)"
];

function reduce_array($res, $str){
    $res .= $str."-";
    return $res;
}
function map_to_lower($string){
    return strtolower($string);
}
function to_lower($array){
    $lower_case_array = array_map("map_to_lower", $array);
    return array_reduce($lower_case_array, "reduce_array", "");
}

$new_phraces = to_lower($phraces);
print(str_replace(")-", "", $new_phraces));

