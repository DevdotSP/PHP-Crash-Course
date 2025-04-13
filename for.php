<?php

echo "Rocket launch countdown : \n";

for ($i = 10; $i > 0; $i--) {
echo $i . "...";
if ($i == 1) {
  echo "Liftoff! \n";
}
sleep(1);
}