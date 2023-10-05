<?php
function is_valid($filename) {
    if (file_exists($filename)) {
        return file_exists($filename);
    } else {
        return false;
    }
}

if (is_valid('function.php')) {
    include 'function.php';
    simpleFunction();
} else {
    echo "File not found";
}
?>