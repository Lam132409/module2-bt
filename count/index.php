<?php

function countSameElement($array, $number)
{
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $number) {
            $count++;
        }
    }
    return $count . " la so lan xuat hien cua so: " . "$number";
}

$myArray = [2, 2, 2, 2, 3, 7, 4, 2, 3];
$number = 2;
echo countSameElement($myArray, $number);