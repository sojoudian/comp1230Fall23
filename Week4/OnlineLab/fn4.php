<?php
function incrementValue(&$value){
    $value++;
}

$number = 5;
echo "Original number is: $number \n";

incrementValue($number);
echo "Number after incrementValue() function: $number \n";
?>