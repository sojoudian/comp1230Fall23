<?php
// Global scope variable
$globalVar = "I'm a global variable";

function exampleFunction() {
    // Local scope variable
    $localVar = "I'm a local variable";
    
    // Accessing the global variable inside the function
    global $globalVar;

    // Static variable
    static $staticVar = 0;
    $staticVar++;
    $staticVar++;

    echo "Inside the function:<br>";
    echo "Local variable: $localVar<br>";
    echo "Global variable: $globalVar<br>";
    echo "Static variable: $staticVar<br>";
}

// Call the function
exampleFunction();

// Attempt to access the local variable outside the function (will result in an error)
// echo "Outside the function: $localVar<br>";

echo "Outside the function:<br>";
echo "Global variable: $globalVar<br>";
// Attempt to access the static variable outside the function (will not work as expected)
// echo "Static variable: $staticVar<br>";
?>
