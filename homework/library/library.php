<?php

$catalog = [];

function add_to_library($name = "«-«", $author = "«-«", $writing_year = "«-«", $publicator = "«-«"){
    array_push($GLOBALS ["catalog"], [
        "name" => $name,
        "author" => $author,
        "writing_year" => $writing_year,
        "pulicator" => $publicator
    ]);
}

for ($i = 1; $i <= 10; $i++) { 
    add_to_library("Book name$i", "Author$i", 1990 + $i, "Publicator name$i");
}

print_r($catalog);