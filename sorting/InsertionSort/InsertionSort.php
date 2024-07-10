<?php

function InsertionSort(array $array): array
{
    for ($i = 1; $i < count($array); $i++) {
        $key = $array[$i];
        $j = $i - 1;
        // Step 3: Compare the key with the previous elements
        while ($j >= 0 && $array[$j] >= $key) {
            // Step 4: Shift elements to the right to make space for the key
            $array[$j + 1] = $array[$j];
            $j--;
        }
        // Step 5: Insert the key at the correct position
        $array[$j + 1] = $key;
    }

    // Step 6: Return the sorted array
    return $array;
}


//sample array
$array = [12, 11, 13, 5, 6];

// Calling the insertionSort function
$sortedArray = InsertionSort($array);

print_r($sortedArray);
