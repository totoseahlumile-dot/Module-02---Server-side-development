<?php 

$name = "Ahlumile";
$age = 18;
$favouriteColor = "Red";
$favouriteHobby = "football";

echo 'Hi, my name is ' . $name . '. I am ' . $age . ' years old. My favourite color is ' . $favouriteColor . ' and I enjoy playing ' . $favouriteHobby . '. <br>';

// 2

$height = 1.65;
$weight = 59;
$BMI = round($weight / ($height * $height), 2);

echo " Your BMI is :" .$BMI . "(Normal weight)";

// 3

$globalVar = "Wassup yall! This is Global Variable. I'm outside the building";

function modifyGlobalVar() {
    global $globalVar;
    $globalVar = "TADAA! It's me again! I'm inside the building now. ";

    $localVar = "I'm Local Variable and I've always been within this building.";
    echo "<br>Local variable: " . $localVar;
}

modifyGlobalVar();
echo "<br>Global variable after the function: " . $globalVar;


// 4

$num1 = 5.5;
$num = intval($num1);

echo "<br> The integer value of $num1 is: $num";

// 5

$name = "Ozi";
$num = 8;
$floatnum = 3.14;
$weekDays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

echo gettype($name) . "<br>";
echo gettype($num) . "<br>";
echo gettype($floatnum) . "<br>";
echo gettype($weekDays) . "<br>";






?>
