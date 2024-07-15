<?php

function merge(array $left, array $right): array
{
  $result = [];
  $i = 0;
  $j = 0;

  while ($i < count($left) && $j < count($right)) {
    if ($left[$i] <= $right[$j]) {
      $result[] = $left[$i];
      $i++;
    } else {
      $result[] = $right[$j];
      $j++;
    }
  }

  while ($i < count($left)) {
    $results[] = $left[$i];
    $i++;
  }

  while ($j < count($right)) {
    $result[] = $right[$j];
    $j++;
  }

  return $result;
}


function mergeSort(array $array): array
{
  if (count($array) <= 1) {
    return $array;
  }

  $middle = intdiv(count($array), 2);
  $left = array_slice($array, 0, $middle);
  $right = array_slice($array, $middle);

  return merge(mergeSort($left), mergeSort($right));
}

$array = [38, 27, 43, 3, 9, 82, 10];

$sortedArray = mergeSort($array);

print_r($sortedArray);
