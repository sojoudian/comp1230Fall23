<?php
// Arithmetic operators
$a = 10;
$b = 5;
$addition = $a + $b;         // Addition
$subtraction = $a - $b;      // Subtraction
$multiplication = $a * $b;   // Multiplication
$division = $a / $b;         // Division
$modulus = $a % $b;          // Modulus (remainder)

echo "Arithmetic Operators:<br>";
echo "Addition: $addition<br>";
echo "Subtraction: $subtraction<br>";
echo "Multiplication: $multiplication<br>";
echo "Division: $division<br>";
echo "Modulus: $modulus<br>";

// Assignment operators
$x = 10;
$y = 5;
$x += $y;   // Equivalent to $x = $x +   ---- $x= $x + $y
$y *= 2;    // Equivalent to $y = $y * 2 ---- $y = $y *2 5*2=10

echo "<br>Assignment Operators:<br>";
echo "x = $x<br>";  //15
echo "y = $y<br>";  // 10

// Comparison operators
$num1 = 10;
$num2 = 5;
$isEqual = ($num1 == $num2);       // Equal to
$isNotEqual = ($num1 != $num2);    // Not equal to
$isGreater = ($num1 > $num2);      // Greater than
$isLess = ($num1 < $num2);         // Less than
$isGreaterOrEqual = ($num1 >= $num2); // Greater than or equal to
$isLessOrEqual = ($num1 <= $num2);   // Less than or equal to


echo "<br>Comparison Operators:<br>";
echo "Equal: " . ($isEqual ? 'true' : 'false') . "<br>";
echo "Not Equal: " . ($isNotEqual ? 'true' : 'false') . "<br>";
echo "Greater Than: " . ($isGreater ? 'true' : 'false') . "<br>";
echo "Less Than: " . ($isLess ? 'true' : 'false') . "<br>";
echo "Greater Than or Equal To: " . ($isGreaterOrEqual ? 'true' : 'false') . "<br>";
echo "Less Than or Equal To: " . ($isLessOrEqual ? 'true' : 'false') . "<br>";

// Logical operators
$isTrue = true;
$isFalse = false;
$andResult = $isTrue && $isFalse; // Logical AND
$orResult = $isTrue || $isFalse;  // Logical OR
$notResult = !$isTrue;            // Logical NOT

echo "<br>Logical Operators:<br>";
echo "Logical AND: " . ($andResult ? 'true' : 'false') . "<br>";
echo "Logical OR: " . ($orResult ? 'true' : 'false') . "<br>";
echo "Logical NOT: " . ($notResult ? 'true' : 'false') . "<br>";
?>

