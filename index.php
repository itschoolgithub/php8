<?php
include_once "header.php";
include_once "header.php";

// function sum($a = 1, $b = 10) {
//     // echo "<br>";

//     $s = 0;

//     for($i = $a; $i <= $b; $i++) {
//         $s = $s + $i;
//     }

//     // echo $s;
//     return $s;
// }

// if (!function_exists("sum")) {
//     function sum($a, $b) {
//         return $a + $b;
//     }
// }

// sum();
// sum(5);
// sum(100, 1000);
// sum(-10, 50);

// $summa = sum(1, sum(1, 100));
// echo $summa;

// $sum = function ($a = 1, $b = 10) {
//     $s = 0;

//     for($i = $a; $i <= $b; $i++) {
//         $s = $s + $i;
//     }

//     return $s;
// };

// echo "<br>";
// echo $sum(1, 10);

// $sum = function ($a, $b) {
//     return $a + $b;
// };

// echo "<br>";
// echo $sum(1, 10);

// $a = 1;

// function b() {
//     // global $a;
//     // $a = "hello";
//     // echo $a;
//     echo $GLOBALS['a'];
//     $c = 20;
//     return $c;
// }

// $a = 10;

// $c = b();

// echo $c;

// echo $a;

require_once "functions.php";
require_once "sum.php";
// require "functions.php";
echo "Hello World!";

if (function_exists("square")) {
    echo square(5, 7);
}