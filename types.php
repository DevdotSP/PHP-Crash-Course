<?php

//type coersion
$isStudent = 1;
var_dump($isStudent,true, $isStudent == true);

$scores = [85, "90", 95.5];
$total = $scores[0] + $scores[1];
var_dump($scores,$total);

echo "Total score is: " . $total . "\n";