<?php 
declare(strict_types=1); // strict requirement
/* The real power of PHP comes from its functions.

PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.


PHP Built-in Functions

PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.


PHP User Defined Functions

Besides the built-in PHP functions, it is possible to create your own functions.

    A function is a block of statements that can be used repeatedly in a program.
    A function will not execute automatically when a page loads.
    A function will be executed by a call to the function.


    Create a User Defined Function in PHP

A user-defined function declaration starts with the word function:
Syntax
function functionName() {
  code to be executed;
} 



*/

function writeMsg() {
    echo "Hello world!<br>";
  }
  
  writeMsg(); // call the function


  /*
  PHP Function Arguments

Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma. 

*/

function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");

  echo "<hr>";

  function familyNamee($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyNamee("Hege", "1975");
  familyNamee("Stale", "1978");

  /*
  PHP is a Loosely Typed Language

In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.

In the following example we try to send both a number and a string to the function without using strict:


function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10


*/

echo "<hr>";


function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 5);
// since strict is enabled and "5 days" is not an integer, an error will be thrown

echo "<br>";

function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);

  echo "<hr>";
  /* PHP Functions - Returning values

  To let a function return a value, use the return statement:
  */

  function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4);

  /* PHP Return Type Declarations

PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.

*/

echo "<br>";
function addNumberss(float $a, float $b) : float {
    return $a + $b;
  }
  echo addNumberss(1.2, 5.2); 

  echo "<hr>";
  function addNumberse(float $a, float $b) : int {
    return (int)($a + $b);
  }
  echo addNumberse(1.6, 5.2); 

  /* Passing Arguments by Reference

In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

*/

echo "<br>";
function add_five(&$value) {
    $value += 5;
  }
  
  $num = 5;
  add_five($num);
  echo $num;