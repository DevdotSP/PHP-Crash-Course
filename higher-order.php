<?php

$users = [
  ['id' => 1, 'name' => 'Alice', 'role' => 'admin'],
  ['id' => 2, 'name' => 'Raphael', 'role' => 'admin'],
  ['id' => 3, 'name' => 'Light', 'role' => 'admin'],
];

function createFilter($key,$value) {
  return fn($item) => $item[$key] == $value;
}

$isAdmin = createFilter('role', 'admin');
$isBob = createFilter('name', 'Raphael');
$admins = array_filter($users, $isAdmin);

var_dump($admins);
var_dump(array_filter($users,$isBob));