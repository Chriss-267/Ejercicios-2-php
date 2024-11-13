<?php


function marsExploration($s) {
    // Write your code here
  $target = 'SOS';
  $differences = 0;
  for ($i = 0; $i < strlen($s); $i++) {
    $currentLetter = $s[$i];
    if ($currentLetter !== $target[$i % 3]) {
      $differences++; 
    }
  }
  return $differences;
}

echo marsExploration("SOSSPSSQSSOR");

?>