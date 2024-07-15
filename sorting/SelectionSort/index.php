<?php

function selectionSort(array $array): array
{
  $n = count($array);

  for ($i = 0; $i < $n - 1; $i++) {
    $minIndex = $i;

    for ($j = $i + 1; $j < $n; $j++) {
      if ($array[$j] < $array[$minIndex]) {
        $minIndex = $j;
      }
    }

    if ($minIndex != $i) {
      $temp = $array[$i];
      $array[$i] = $array[$minIndex];
      $array[$minIndex] = $temp;
    }
  }

  return $array;
}

$array = [64, 25, 12, 22, 11];

$sortedArray = selectionSort($array);

print_r($sortedArray);
