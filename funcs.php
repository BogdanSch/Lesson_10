<?php

//default parameters
// function makecup($type = "чаю") {
// 	return "Зробіть  чашку  $type.\n";
// }

// echo makecup("water");
// echo makecup("какао");

// function makecup($types = array("какао"), $maker = "з цукром") {
//     return "Зробіть  чашку  ".implode ( ", ", $types ) . " $maker.\n";
// }
// echo makecup();
// echo makecup(array ("какао", "чаю"));
// echo makecup(array ("каву", "чаю"), "з лимоном");

// function planets() {
//     for($i = 0; $i < func_num_args(); $i ++) {
//       echo func_get_arg($i) . "\n";
//     }
// }
// planets ("Меркурій", "Венера", "Земля", "Марс", "Юпітер");

// //Global variables

// $a = 100; // Глобальна змінна
// function test($a) {
//     echo "1: $a\n"; // виводить 100 - значення параметра $а (локальної змінної)       
//     $GLOBALS["a"]++; // змінюється локальна змінна $а
//     echo "2: $a\n"; // виводить 101 - значення параметра $а (локальної змінної)  
// }
// test($a);
// echo "3: $a\n"; // виводить 101 - глобальна змінна $а не змінилася

// $a = 1;
// $b = 5;

// function sum ()
// {
//    $GLOBALS ["c"] = $GLOBALS ["a"] + $GLOBALS ["b"];
// }

// sum();
// echo $c;

//static variables

function funct() {
    static $a;
    $a++;
    echo "$a ";
}
for($i = 0; $i < 10; $i++)
    funct(); // 1 2 3 4 5 6 7 8 9 10

//array_map

// function my_case($a) {
//     return strtoupper($a);
// }

// $arr = ["M", "a", "r", "y"];
// $new_arr = array_map("my_case", $arr);
// print_r($new_arr);

function cube($n)
{
   return ($n * $n * $n);
}

$a = [1, 2, 3];
$b = array_map("cube", $a);
print_r($b);