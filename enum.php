<?php

enum DaysOfWeek
{
  case MONDAY;
  case TUESDAY;
  case WEDNESDAY;
  case THURSDAY;
  case FRIDAY;
  case SATURDAY;
  case SUNDAY;
}

$today = DaysOfWeek::WEDNESDAY;

if ($today == DaysOfWeek::WEDNESDAY) {
  echo "It is Wed!\n";
}

enum Color: string {
  case RED = '#ff0000';
  case GREEN = '#00FF00';
  case BLUE = '#0000FF';
}

echo Color::RED->value . "\n";

function isWeekend(DaysOfWeek $day): bool {
  return $day == DaysOfWeek::SATURDAY || $day == DaysOfWeek::SUNDAY;
}

echo isWeekend(DaysOfWeek::SATURDAY) ? 'Yes' : 'No';