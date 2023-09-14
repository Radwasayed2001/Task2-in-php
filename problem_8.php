<?php

function findTheSecondLarge($nums) {
    sort($nums);
    return $nums[count($nums)-2];
}

$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10,12,65];
echo findTheSecondLarge($numbers);