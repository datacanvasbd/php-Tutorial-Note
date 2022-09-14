<?php
// php Array w3schools documents
//An array stores multiple values in one single variable:

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// So An array is a special variable, which can hold more than one value at a time.

/* In PHP, there are three types of arrays:

    Indexed arrays - Arrays with a numeric index
    Associative arrays - Arrays with named keys
    Multidimensional arrays - Arrays containing one or more arrays

    */

// The count() function is used to return the length (the number of elements) of an array:
echo "<br>";
echo count($cars);

// The index can be assigned automatically (index always starts at 0), like this:
$carsss = array("Volvo", "BMW", "Toyota");

$carss[0] = "Aaa";
$carss[1] = "Bbbb";
$carss[2] = "Tttt";

echo "<br>";
echo "I like " . $carsss[0] . ", " . $carsss[1] . " and " . $carsss[2] . ".";

echo "<br>";
echo "I like " . $carss[0] . ", " . $carss[1] . " and " . $carss[2] . ".";

// To loop through and print all the values of an indexed array, you could use a for loop

echo "<br>";
$arrlength=count($carsss);
for($x = 0; $x < $arrlength; $x++) {
    echo $carsss[$x];
    echo "<br>";
  }


  /* Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array:  */

$agee = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

$ageee['Peter'] = "35";
$ageee['Ben'] = "37";
$ageee['Joe'] = "43"; 

echo "<br>";
echo "Peter is " . $agee['Peter'] . " years old.";

echo "<br>";
foreach($ageee as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }

  echo "<br>";
 /*  A two-dimensional array is an array of arrays (a three-dimensional array 
 is an array of arrays of arrays).
 */

$carse = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  echo $carse[2][0].": In stock: ".$carse[2][1].", sold: ".$carse[2][2].".<br>";

  echo $carse[2][1].": In stock: ".$carse[1][1].", sold: ".$carse[0][2].".<br>";


  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$carse[$row][$col]."</li>";
    }
    echo "</ul>";
  }

  /* we will go through the following PHP array sort functions:

    sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    asort() - sort associative arrays in ascending order, according to the value
    ksort() - sort associative arrays in ascending order, according to the key
    arsort() - sort associative arrays in descending order, according to the value
    krsort() - sort associative arrays in descending order, according to the key

    */

    echo "<hr>";
    $cars1 = array("Volvo", "BMW", "Toyota");
    sort($cars1);

    $clength1 = count($cars1);
      for($x = 0; $x < $clength1; $x++) {
         echo $cars1[$x];
         echo "<br>";
       }


       $numbers = array(4, 6, 2, 22, 11);
       sort($numbers);

       $clength11 = count($numbers);
       for($x = 0; $x < $clength11; $x++) {
          echo $numbers[$x];
          echo "<br>";
        }

        echo "<hr>";
        rsort($numbers);

        $clength11 = count($numbers);
        for($x = 0; $x < $clength11; $x++) {
           echo $numbers[$x];
           echo "<br>";
         }

echo "<hr>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
echo "<br>";
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }


  echo "<hr>";
  ksort($age);
  echo "<br>";
  foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    arsort($age);
    echo "<hr>";
    echo "<br>";
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
      }


      $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
      krsort($age);
      echo "<hr>";
      echo "<br>";
      foreach($age as $x => $x_value) {
          echo "Key=" . $x . ", Value=" . $x_value;
          echo "<br>";
        }