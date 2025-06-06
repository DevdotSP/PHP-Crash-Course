<?php

function countDown(int $start): Generator
{
  for ($i = $start; $i > 0; $i--) {
    echo "Generating number ... \n";
   yield random_int(1,100);
  }
}

foreach (countDown(5) as $number) {
  echo "Echoing number ...\n";
  echo "$number\n";
}



// function countDown(int $start): array
// {
//   $result = [];
//   for ($i = $start; $i > 0; $i--) {
//     echo "Generating number ... \n";
//     $result[] = random_int(1,100);
//   }
//   return $result;
// }

// foreach (countDown(5) as $number) {
//   echo "Echoing number ...\n";
//   echo "$number\n";
// }