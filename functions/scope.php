<?php

$superhero = "Superman";

function revealIdentity() {
  global $superhero;
  $message = "real name is Clark Ken";
  echo "$superhero $message";
}

echo $superhero;

revealIdentity();

function countVisitors() {
  static $visitorCount = 0;
  $visitorCount++;
  echo "Visitor #$visitorCount has arrived!";
}

countVisitors();
countVisitors();
countVisitors();
