<?php

function add(int $a, int $b): int {
  return $a + $b;
}

var_dump(add(1,3), add(1,3));

$total = 0;

function addTotal($value) {
  global $total;
  $total += $value;
  return $total;
}

var_dump(addTotal(3),addTotal(3));