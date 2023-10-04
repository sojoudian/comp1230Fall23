<?php

// Function to check if a file is valid for inclusion
function is_valid($filename) {
    return file_exists($filename);
}

// Check if function.php is valid before including it
if(is_valid('function.php')) {
    include 'function.php';

    // Now, you can call the simpleFunction from function.php
    simpleFunction();
} else {
    echo "function.php is not valid! \n";
}

?>
