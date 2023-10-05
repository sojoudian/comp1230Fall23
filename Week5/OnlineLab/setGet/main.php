<?php
$currentPath = get_include_path();
echo $currentPath; //C:\php\pear
echo "<br>";

$newPath = $currentPath . PATH_SEPARATOR . __DIR__ . '/include'; 
// echo $newPath;

set_include_path($newPath); //********** */
echo get_include_path();
echo "<br>";

include 'function.php'; //'include/function.php'
simpleFunction();

?>

