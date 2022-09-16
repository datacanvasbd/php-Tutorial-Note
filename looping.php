<?php
/*
In PHP, we have the following loop types:

while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array

*/

$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

/*
$x = 1; - Initialize the loop counter ($x), and set the start value to 1
$x <= 5 - Continue the loop as long as $x is less than or equal to 5
$x++; - Increase the loop counter value by 1 for each iteration
*/

$x1 = 0;

while($x1 <= 100) {
  echo "The number is: $x1 <br>";
  $x1+=10;
}

// Do While Loop
$xx = 1;

do {
  echo "The number is: $xx <br>";
  $xx++;
} while ($xx <= 5);


// For Loop
for ($x2 = 500; $x2 <= 510; $x2++) {
    echo "The number is: $x2 <br>";
  }

  /* $x2 = 500; - Initialize the loop counter ($x2), and set the start value to 0
$x <= 510; - Continue the loop as long as $x2 is less than or equal to 10
$x2++ - Increase the loop counter value by 1 for each iteration
*/

for ($xy = 0; $xy <= 100; $xy+=10) {
    echo "The number is: $xy <br>";
  }

  // The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

  $colors = array("red", "green", "blue", "yellow");
  
    foreach ($colors as $value) {
            echo "$value <br>";
               }


    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $xr => $val) {
        echo "$xr = $val<br>";
    }


    // The break statement can also be used to jump out of a loop.

    for ($xt = 0; $xt < 10; $xt++) {
        if ($xt == 4) {
          break;
        }
        echo "The number is: $xt <br>";
      }


      // Continue for skiping:  This example skips the value of 4:

        for ($x4 = 0; $x4 < 10; $x4++) {
            if ($x4 == 4 || $x4==8) {
              continue;
            }
            echo "The number is: $x4 <br>";
          }

          