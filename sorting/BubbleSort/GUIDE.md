Sure! Bubble Sort is a simple comparison-based sorting algorithm. It repeatedly steps through the list, compares adjacent elements, and swaps them if they are in the wrong order. This process is repeated until the list is sorted.

### Step-by-Step Guide to Implement Bubble Sort in PHP

Here's how you can implement Bubble Sort in PHP:

#### 1. Define the Bubble Sort Function

Create a function to implement the Bubble Sort algorithm.

```php
function bubbleSort(&$array) {
    $n = count($array);

    // Outer loop for the number of passes
    for ($i = 0; $i < $n - 1; $i++) {
        // Inner loop for each pass
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater than the next element
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}
```

#### 2. Example Usage

Use the `bubbleSort` function to sort an array.

```php
$array = [64, 34, 25, 12, 22, 11, 90];

echo "Unsorted array:\n";
print_r($array);

bubbleSort($array);

echo "Sorted array:\n";
print_r($array);
```

### Explanation

1. **Outer Loop**:

   - The outer loop runs `n-1` times, where `n` is the number of elements in the array. Each iteration of the outer loop represents a pass through the array.

2. **Inner Loop**:

   - The inner loop runs from the beginning of the array to `n-i-1`, where `i` is the current pass. This is because, after each pass, the largest element is bubbled to the end of the array and does not need to be compared again.

3. **Comparison and Swap**:
   - Inside the inner loop, adjacent elements are compared. If the current element is greater than the next element, they are swapped. This ensures that the larger elements bubble to the end of the array in each pass.

### Complete Code

Here's the complete code including the `bubbleSort` function and its usage:

```php
<?php
function bubbleSort(&$array) {
    $n = count($array);

    // Outer loop for the number of passes
    for ($i = 0; $i < $n - 1; $i++) {
        // Inner loop for each pass
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater than the next element
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}

$array = [64, 34, 25, 12, 22, 11, 90];

echo "Unsorted array:\n";
print_r($array);

bubbleSort($array);

echo "Sorted array:\n";
print_r($array);
?>
```

### Output

When you run the code, you will get the following output:

```
Unsorted array:
Array
(
    [0] => 64
    [1] => 34
    [2] => 25
    [3] => 12
    [4] => 22
    [5] => 11
    [6] => 90
)
Sorted array:
Array
(
    [0] => 11
    [1] => 12
    [2] => 22
    [3] => 25
    [4] => 34
    [5] => 64
    [6] => 90
)
```

By following this guide, you can implement the Bubble Sort algorithm in PHP and understand its working principles.
