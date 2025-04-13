<?php

$size = "L";

switch ($size) {
  case "S":
  case "M":
    echo "Small or Medium size";
    break;
  case "L":
  case "XL":
    echo "Large or Extra Large size\n";
    break;
  default:
    echo "Unkown size";
}

$badAttempts = 3;

switch ($badAttempts) {
  case 3:
    echo "You are blocked!\n";
  case 2:
  case 1:
    echo "Bad attempt detected!\n";
}
