<?php
/* A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

    A variable starts with the $ sign, followed by the name of the variable
    A variable name must start with a letter or the underscore character
    A variable name cannot start with a number
    A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    Variable names are case-sensitive ($age and $AGE are two different variables)

    */

    $txt = "W3Schools.com";
    echo "I love $txt!";
   
    echo "<br>";
    $txt = "W3Schools.com";
    echo "I love " . $txt . "!";
    echo "<br>";

    $x = 5;
    $y = 4;
    echo $x + $y;

    /* PHP automatically associates a data type to the variable, depending on its value. Since the 
    data types are not set in a strict sense, you can do things like adding a string to an integer 
    without causing an error.

    In PHP 7, type declarations were added. This gives an option to specify the data type expected 
    when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" 
    on a type mismatch.

    PHP has three different variable scopes:

    local
    global
    static

    */

    echo "<br>";

    $x1 = 5; // global scope

    function myTest() {
    // using x inside this function will generate an error
    //  echo "<p>Variable x inside function is: $x1</p>";
    }
    myTest();
    echo "<br>";

    echo "<p>Variable x outside function is: $x1</p>";

    echo "<hr>";
    function myTestt() {
        $x2 = 335; // local scope
        echo "<p>Variable x inside function is: $x2</p>";
      }
      myTestt();

      echo "<hr>";

        $x3 = 5;
        $y3 = 10;

        function myTest11() {
        global $x3, $y3;
        $y3 = $x3 + $y3;
        }

        myTest11();
        echo "<br>";
        echo $y3; // outputs 15


        echo "<hr>";
        $x6 = 5;
        $y6 = 10;

        function myTest6() {
        $GLOBALS['y6'] = $GLOBALS['x6'] + $GLOBALS['y6'];
        }

        myTest6();
        echo $y6; // outputs 15

        /* However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

           To do this, use the static keyword when you first declare the variable: */
        
        echo "<hr>";
           function myTestt1() {
            static $x = 0;
            echo $x;
            $x++;
          }
          
          myTestt1();
          echo "<br>";
          myTestt1();
          echo "<br>";
          myTestt1();

