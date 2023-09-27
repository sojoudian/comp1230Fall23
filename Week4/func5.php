<?php
// Define a variable with global scope
$globalVar = "I am a global variable\n";

// Define a function
function myFunction() {
    // Use the global keyword to access the variable with global scope
    global $globalVar;
    
    // Display the value of the global variable
    echo $globalVar;
    $localVar = "I am local var";
}

// Call the function
myFunction();
echo "$globalVar\n";
//echo "$localVar\n";
?>