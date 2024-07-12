<?php

function insertionSort(array $array): array
{
    for ($i = 1; $i < count($array); $i++) {
        $key = $array[$i];
        $j = $i - 1;

        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j--;
        }

        $array[$j + 1] = $key;
    }

    return $array;
}


$array = [12, 11, 13, 5, 6];
$sortedArray = insertionSort($array);
print_r($sortedArray);
