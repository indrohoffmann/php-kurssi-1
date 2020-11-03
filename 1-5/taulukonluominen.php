<?php

$array = array ("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K");

$array2 = array_reverse($array);

for ($x = 0; $x < count($array); $x++) {
  echo $array[$x] . ' ';

}
echo '<br>';

for ($x = 0; $x < count($array); $x++) {
  echo $array2[$x] . ' ';

}
?>