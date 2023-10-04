<?php

// Get the current include path
$currentIncludePath = get_include_path();

// Modify the include path to add the "includes" directory
$newIncludePath = $currentIncludePath . PATH_SEPARATOR . __DIR__ . '/includes';
set_include_path($newIncludePath);

// Now, we can include function.php without specifying the full path
include 'function.php';

// Test the function to see if it's included
sampleFunction();

// Optionally, you can reset the include path to its original value
set_include_path($currentIncludePath);

?>
