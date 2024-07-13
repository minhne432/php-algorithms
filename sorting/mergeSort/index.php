<?php
// Merge function to merge two halves
function merge(array $left, array $right): array
{
  $result = [];
  $i = 0;
  $j = 0;

  // Compare each element and merge into result array
  while ($i < count($left) && $j < count($right)) {
    if ($left[$i] <= $right[$j]) {
      $result[] = $left[$i];
      $i++;
    } else {
      $result[] = $right[$j];
      $j++;
    }
  }

  // Append remaining elements, if any
  while ($i < count($left)) {
    $result[] = $left[$i];
    $i++;
  }

  while ($j < count($right)) {
    $result[] = $right[$j];
    $j++;
  }

  return $result;
}

// Merge sort function
function mergeSort(array $array): array
{
  // Base case: if the array has 1 or 0 elements, it's already sorted
  if (count($array) <= 1) {
    return $array;
  }

  // Divide the array into halves
  $middle = intdiv(count($array), 2);
  $left = array_slice($array, 0, $middle);
  $right = array_slice($array, $middle);

  // Recursively sort each half and merge them
  return merge(mergeSort($left), mergeSort($right));
}

// Sample array
$array = [38, 27, 43, 3, 9, 82, 10];

// Calling the mergeSort function
$sortedArray = mergeSort($array);

// Printing the sorted array
print_r($sortedArray);
