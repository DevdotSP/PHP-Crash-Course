<?php

require 'array.php';


$set1 = [1, 2, 3, 4, 5];
$set2 = [3, 4, 5, 6, 7];

// var_dump(array_intersect($set1,$set2));
// var_dump(array_diff($set1,$set2));
// var_dump(array_diff($set2,$set1));

$keys = array_map(fn($key) => ucfirst($key), array_keys($associativeArray));
$values = array_values($associativeArray);

var_dump($keys, $values);

var_dump(
  array_key_exists('name', $associativeArray),
  in_array('John', $associativeArray)
);

var_dump($fruits);
$fruitString = implode(', ', $fruits);

$backToArray = explode(', ', $fruitString);
var_dump($fruitString, $backToArray);

var_dump(
  array_unique(array_merge($set1,$set2)),
  array_slice($set1,1,3),
  array_merge($set1, $set2),
  array_merge($associativeArray, ['country'  => 'Japan']),
  $set1+$set2,
  $associativeArray + ['country'  => 'Phillipines'],
 [ ...$set1,...$set2],
  [...$associativeArray, ...['country'  => 'Phillipines']]
);

var_dump(
  array_search('banana',$fruits)
);
