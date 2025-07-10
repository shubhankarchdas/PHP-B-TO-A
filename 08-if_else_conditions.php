<!-- if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed -->

<?php
$a = 10;
$b = 20;

if($a<$b){
    echo "5 is less than 10";
} else {
    echo "5 is not less than 10";
}
echo "<br>";

if($a==10){
    echo "10 is equal to 10";
}

echo "<br>";


if($a<>$b){
    echo "10 is not equal to 20";
}

echo "<br>";

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo nl2br("Both conditions are true\n");
}

// echo "<br>";
// Write a message if one of the conditions are true
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}
?>



<!DOCTYPE html>
<html>
<body>

<h1>The xor Operator</h1>

<p>Write a message if one of the conditions are true, but not the both conditions are true.</p>

<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}

echo "<br>";

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

echo "<br>";

// One-line if statement:

$a = 5;

if ($a < 10) $b = "Hello";

echo $b;

echo "<br>";

$a = 20;
$b = $a < 25 ? "hii" : "hello";
echo $b;

echo "<br>";

// Nested If
// You can have if statements inside if statements, this is called nested if statements.

$a = 20;
if ($a<25){
    echo "a is less than 25";
    if ($a>10){
        echo "a is greater than 10";
    }else{
        echo "a is less than 10";
    }
}


?>  
</body>
</html>