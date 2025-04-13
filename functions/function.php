<?php

function greet(string $name ) {
  return "Hello, $name!";
}

echo greet("Raphael");

function greetWithTime(string $name, string $time = "day"){
return "\n Good $time, $name";
}

echo greetWithTime("Bob");
echo greetWithTime("Raphael", "evening");