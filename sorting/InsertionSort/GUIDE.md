Certainly! Below is a step-by-step guide to implementing the insertion sort algorithm in PHP.

### Step 1: Define the Function

First, define a function called `insertionSort` that takes an array as its parameter.

```php
function insertionSort(array $array): array {
    // Step 2: Loop through each element in the array starting from the second element
    for ($i = 1; $i < count($array); $i++) {
        $key = $array[$i];
        $j = $i - 1;

        // Step 3: Compare the key with the previous elements
        while ($j >= 0 && $array[$j] > $key) {
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
```

### Step 2: Test the Function

You can test the `insertionSort` function with a sample array.

```php
// Sample array
$array = [12, 11, 13, 5, 6];

// Calling the insertionSort function
$sortedArray = insertionSort($array);

// Printing the sorted array
print_r($sortedArray);
```

### Complete Code

Here is the complete code including the function and the test case:

```php
<?php
function insertionSort(array $array): array {
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
?>
```

### Explanation

1. **Function Definition**: The `insertionSort` function is defined to accept an array and return a sorted array.
2. **Loop Through Elements**: The loop starts from the second element (`$i = 1`) since the first element is considered already sorted.
3. **Key Element**: The `$key` is the current element to be positioned in the sorted part of the array.
4. **Comparison and Shifting**: The inner `while` loop compares the key with the previous elements and shifts elements to the right until the correct position for the key is found.
5. **Insertion**: The key is inserted at its correct position.
6. **Return**: The sorted array is returned.

This is a simple yet effective way to implement insertion sort in PHP.
