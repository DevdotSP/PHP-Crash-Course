<?php 

$x = 10;

if ($x > 5) {
  echo "x is greater than 5 \n";
}

$score = 85;
if($score >= 90) {
  echo "A";
} elseif ($score >= 80) {
  echo "B";
} elseif ($score >= 70) {
  echo "C";
}
elseif ($score >= 60) {
  echo "D";
} else {
  echo "F";
}

$num = 15;

if ($num > 0) {
  if ($num %2 == 0) {
    echo "\nPositive even number";
  } else {
    echo "\nPositive odd number";
  }
} else {
  echo "\nNon-positive number";
}

$username = "admin";
$password = "password123";

if ($username == "admin" && $password == "password123") {
  echo "Success";
} else {
  echo "Fail";
}