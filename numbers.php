<?php

$int = 42;
$float = 3.14;
$stringToInt = (int)"100";
$floatToInt = (int)3.99;

var_dump($int,$float,$stringToInt,$floatToInt);
var_dump(
  round(3.7),
  round(3.4),
  floor(3.8), // always round down
  ceil(3.1), // always round up
  min(2,3,1,7), 
  max(2,3,1,7),
  rand(1,10),
  abs(-5)
);

$number = 1234.90;

echo "Formatted ". number_format($number,2, '.', ',');