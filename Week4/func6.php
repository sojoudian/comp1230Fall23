<?php

// Define a function with type declarations for its parameters and return value
function add(int $a, int $b): int {
    return $a + $b;
}

// Call the function with integer values
$result = add(5, 3);
echo $result; // Outputs: 8

?>
