Certainly! Below is a step-by-step guide to implementing the selection sort algorithm in PHP.

### Step 1: Define the Function

First, define a function called `selectionSort` that takes an array as its parameter.

```php
function selectionSort(array $array): array {
    // Step 2: Get the length of the array
    $n = count($array);

    // Step 3: Loop through each element in the array
    for ($i = 0; $i < $n - 1; $i++) {
        // Step 4: Assume the current index is the minimum
        $minIndex = $i;

        // Step 5: Find the index of the minimum element in the remaining unsorted array
        for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
        }

        // Step 6: Swap the found minimum element with the first element
        if ($minIndex != $i) {
            $temp = $array[$i];
            $array[$i] = $array[$minIndex];
            $array[$minIndex] = $temp;
        }
    }

    // Step 7: Return the sorted array
    return $array;
}
```

### Step 2: Test the Function

You can test the `selectionSort` function with a sample array.

```php
// Sample array
$array = [64, 25, 12, 22, 11];

// Calling the selectionSort function
$sortedArray = selectionSort($array);

// Printing the sorted array
print_r($sortedArray);
```

### Complete Code

Here is the complete code including the function and the test case:

```php
<?php
function selectionSort(array $array): array {
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
?>
```

### Explanation

1. **Function Definition**: The `selectionSort` function is defined to accept an array and return a sorted array.
2. **Array Length**: The length of the array is stored in the variable `$n`.
3. **Outer Loop**: The outer loop iterates over each element of the array.
4. **Minimum Element**: The inner loop finds the minimum element in the unsorted portion of the array.
5. **Swapping Elements**: If the minimum element is not already in its correct position, it is swapped with the first element of the unsorted portion.
6. **Return**: The sorted array is returned.

Selection sort is an in-place, comparison-based sorting algorithm with a time complexity of O(n²) for both the average and worst cases. It's not the most efficient algorithm for large datasets but can be useful for educational purposes and small arrays.
