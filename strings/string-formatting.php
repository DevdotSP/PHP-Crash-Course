<?php

$name = "Alice";
$age = 30;

printf("%s is %d years old. \n", $name, $age);

$csv = "apple,banana,cherry";

// to make string to array
$fruits = explode(",", $csv);
var_dump($fruits);

// become string from array
$fruitsImplode = implode(", ", $fruits);
var_dump($fruitsImplode);

$padded = str_pad("Hello", 11, '-', STR_PAD_BOTH);
echo $padded;

var_dump(trim("    Hello, Wold!       "));
