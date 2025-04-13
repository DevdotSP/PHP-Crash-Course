<?php

declare(strict_types=1);

// function sum(...$numbers) {
//   return array_sum($numbers);

// }

// echo sum(1,2,3,4,5);

function sum(int ...$numbers): int
{
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

var_dump(sum());
var_dump(sum(5));
var_dump(sum(5, 10, 15, 20, 25));

$numbers = [1, 2, 3];

var_dump(sum(...$numbers));

function introduceTeam(string $teamName, mixed ...$members): void
{
  echo "Team: $teamName\n";
  echo "Members: " . implode(", ", $members) . "\n";
}

introduceTeam("A Team", "John", "Raphael");

$members = ["Denis", "Light", "Shayne"];

introduceTeam("B Team", ...$members);

introduceTeam("C Team", "Raphael", ...$members);