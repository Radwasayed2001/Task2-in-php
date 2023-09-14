<?php

function checkNumber($numbers, $x) {
    if (in_array($x, $numbers)) {
        echo "Found<br>";

        echo ($x >= 0) ? "Positive<br>" : "Negative<br>";

        $numberOfDigits = strlen((string)$x);
        echo "Number of digits: " . $numberOfDigits . "<br>";

        $isPrime = isPrime($x);
        echo ($isPrime) ? "Prime<br>" : "Not prime<br>";

        echo ($x % 2 == 0) ? "Even<br>" : "Odd<br>";

        $isPalindrome = isPalindrome($x);
        echo ($isPalindrome) ? "Yes you can read from the right as the left<br>" : "No can not read the same from the right as the left<br>";
    } else {
        echo "Not found<br>";
    }
}

function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

function isPalindrome($number) {
    $reverse = strrev((string)$number);
    return ((string)$number === $reverse);
}

$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];
$x1 = 545;
$x2 = 1000;

echo "For x1:<br>";
checkNumber($numbers, $x1);

echo "<br>For x2:<br>";
checkNumber($numbers, $x2);