<?php

$array = [ 1,10,5,2,11];
$x = 3;
$larger = 0;
$smaller = 0;
for($i =0; $i < count($array); $i++) {
    if ($array[$i] > $x)
    $larger++;
    else if ($array[$i] < $x)
    $smaller++;
}
echo "There is $larger numbers in the array larger than $x,<br> and ";
echo "there is $smaller numbers in the array smaller than $x";