<?php 

// Task-1
// Creating a PHP script using a loop to print all odd numbers between 1 and 10.

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 1) {
        echo $i . ", ";
    }
}


echo "<br> <br>";

// Task-2
// Declaring a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called.

function greet($name) {
    echo "Good Morning, $name!";
}
greet("Mahmud Hasan");

echo "<br> <br>";

// Task-3
// Creating a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo factorial(8);

echo "<br> <br>";


// Task-4
// Writing a PHP function named 'Fibonacci' that prints the Fibonacci series numbers up to 12 numbers.

function Fibonacci($n){
    if ($n == 0)
        return 0;    
    else if ($n == 1)
        return 1;    

  // Recursive Call to Generate Next Numbers
    else
        return (Fibonacci($n - 1) 
              + Fibonacci($n - 2));
}

// Driver Code
$n = 12;

for ($i = 0; $i < $n; $i++ ) {
    echo Fibonacci($i) . ', ';
}

echo "<br> <br>";