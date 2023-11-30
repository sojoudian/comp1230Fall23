<?php
//1. Error Handling Script
//Error Reporting turned off
error_reporting(0);

// Custom Error Handler
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    $errorMsg = "Error: [$errno] $errstr in $errfile on line $errline\n";
    error_log($errorMsg, 3, "error_log.txt"); // Logging to a file
    return true; // Indicates that the error has been handled
}

// Set the custom error handler
set_error_handler("customErrorHandler");

// Triggering some errors
echo $undefinedVariable; // Undefined variable
$result = 10 / 0; // Division by zero
?>