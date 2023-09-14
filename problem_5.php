<?php
function capitalizeFirstLetter($namesArray) {
    $capitalizedArray = [];

    foreach ($namesArray as $name) {
        $capitalizedName = ucfirst($name);
        $capitalizedArray[] = $capitalizedName;
    }

    return $capitalizedArray;
}

$names = ["eraasoft", "backend", "group313"];
$capitalizedNames = capitalizeFirstLetter($names);
echo "<pre>";
var_dump($capitalizedNames);