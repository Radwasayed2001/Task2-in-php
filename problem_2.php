<?php

$firstArray = [1,2,3,4,5,6,7,8,9,10];
$secondArray = [];
$k =0;
for($i =0; $i<2; $i++)
{
    for($j =0; $j<5; $j++) {
        $secondArray[$i][$j] = 2 * $firstArray[$k++];
    }
}
for($i =0; $i<2; $i++)
{
    for($j =0; $j<5; $j++) {
        echo $secondArray[$i][$j] . " ";
    }
    echo "<br>";
}

