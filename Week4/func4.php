<?php
function incrementValue(&$value) {
    $value++;
}

$number = 5;
echo "Original number: $number<br>";

incrementValue($number);

echo "Number after incrementValue() function: $number";

?>