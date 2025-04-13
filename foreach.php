<?php

$basket = [
  "Apple" => 3,
  "Banana" => 4
];

$total = 0;

//foreach ($basket as $quantity ) - this is valid to only get the value only of an array
//foreach ($basket as $item => $quantity ) - this is valid to get the key and the value on an array
foreach ($basket as $item => $quantity ) {
  echo "$item: $quantity\n";
  $total += $quantity;
}

echo "total: $total \n";