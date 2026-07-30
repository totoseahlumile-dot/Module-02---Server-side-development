<?php 

// Task 1 - for loops

for ($x = 0; $x <= 10; $x++) {
    echo " $x <br>";
}

//` Task 2 - Arrays

$carName = array("Jaguar F-Type", "Supra", "Porshe 911");

for ($x = 0; $x < count($carName); $x++) {
    echo "Car Name: " . $carName[$x] . "<br>";
}

// Task 3 - for each loop 

foreach ($carName as $car) {
    echo "Car Name: " . $car . "<br>";
}

// Task 4 - while loop

$y = 0;

while ($y <= 5) {
    echo " $y <br>"; 
    $y++;
}

// Task 5 - do while loop

$y = 6;

do {
    echo "Y is equal to : $y <br>"; 
    $y++;
} while ($y <= 5);

// My observation - only 6 is displayed and the code executes once 
//because the condition is checked after the code block is executed.

// Task 6 - functions

function printMyName($name) {
    echo "My name is $name <br>";
}

printMyName("Jack");

// Task 7 - functions with return values

function multiply($num1, $num2) {
   return $num1 * $num2;
   
}

echo multiply(5, 2) ."<br>";

// Task 8 - functions  with array loops

function arrayLooper($array) {
    foreach ($array as $fruit) {
        echo "Fruit: " . $fruit . "<br>";
    }
}

$fruits = array('Apple', 'Banana', 'Mango','Orange');
arrayLooper($fruits);

?>