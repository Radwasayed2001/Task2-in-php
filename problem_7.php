<?php

function searchName($names) {
    foreach ($names as $index => $name) {
        if ($name === "Bob") {
            return $index;
        }
    }
    return -1;
}

$names1 = ["Alice", "Charlie", "Dave", "Bob"];
$names2 = ["Alice", "Charlie", "Dave"];

$result1 = searchName($names1);
$result2 = searchName($names2);

echo "Result 1: " . $result1 . "<br>";
echo "Result 2: " . $result2;