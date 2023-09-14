<?php

function moveZeros(&$nums) {
    $n = count($nums);
    $nonZeroIndex = 0; 
    for ($i = 0; $i < $n; $i++) {
        if ($nums[$i] != 0) {
            $nums[$nonZeroIndex] = $nums[$i];
            $nonZeroIndex++;
        }
    }

    while ($nonZeroIndex < $n) {
        $nums[$nonZeroIndex] = 0;
        $nonZeroIndex++;
    }
}

$nums = [0, 1, 0, 3, 12];
moveZeros($nums);

echo "<pre>";
var_dump($nums);