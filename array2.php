<html>
   <body>
   
      <?php

      // Array According to Tutorial Points
         /* First method to create array. */
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
         
         /* Second method to create array. */
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }

        echo "<hr>";
         /* First method to associate create array. */
         $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
         
         echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
         echo "Salary of qadir is ".  $salaries['qadir']. "<br />";


         /* Second method to create array. */
         $salaries['mohammad'] = "high";
         $salaries['qadir'] = "medium";
         $salaries['zara'] = "low";
         
         echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
         echo "Salary of qadir is ".  $salaries['qadir']. "<br />";



         $marks = array( 
            "mohammad" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "qadir" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            )
            );

            echo "Marks for qadir in maths : ";
            echo $marks['qadir']['maths'] . "<br />"; 

            // We can easily traverse array in PHP using foreach loop. Let's see a simple example to traverse all the elements of PHP array

            $size=array("Big","Medium","Short");  
                foreach( $size as $s )  
                {  
                echo "Size is: $s<br />";  
                } 


                $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");  
                    foreach($salary as $k => $v) {  
                    echo "Key: ".$k." Value: ".$v."<br/>";  
                    }  

echo "<hr>";

                    $emp = array  
                    (  
                    array(1,"sonoo",400000),  
                    array(2,"john",500000),  
                    array(3,"rahul",300000)  
                    );  
                    echo "<table border=2>";
                  for ($row = 0; $row < 3; $row++) {
                     echo "<tr>"  ;
                    for ($col = 0; $col < 3; $col++) {  
                        echo "<td>";
                      echo $emp[$row][$col]."  "; 
                      echo "</td>"; 
                    } 
                   echo "</tr>";
                    echo "<br/>";  
                  } 
                  echo "</table>";


    // Array function
    echo "<hr>";
    $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
    print_r(array_change_key_case($salary,CASE_UPPER));   
    echo "<br>";
    print_r(array_change_key_case($salary,CASE_LOWER));   

    // PHP array_chunk() function splits array into chunks. By using array_chunk() method, you can divide array into many parts.

    echo "<br>";
    print_r(array_chunk($salary,1));   
    echo "<br>";

    // PHP count() function counts all elements in an array.

    $season=array("summer","winter","spring","autumn");    
    echo count($season);  

    echo "<br>";

    $season=array("summer","winter","spring","autumn");    
sort($season);  
foreach( $season as $s )    
{    
  echo "$s<br />";    
}  

echo "<hr>";
$reverseseason=array_reverse($season);  
foreach( $reverseseason as $s )    
{    
  echo "$s<br />";    
}    

$season=array("summer","winter","spring","autumn");    
$key=array_search("spring",$season);  
echo $key;  

echo "<br>";


$name1=array("sonoo","john","vivek","smith");    
$name2=array("umesh","sonoo","kartik","smith");    
$name3=array_intersect($name1,$name2);  
foreach( $name3 as $n )    
{    
  echo "$n<br />";    
} 

// Define array
$cities = array("London", "Paris", "New York");
 
// Display the cities array
print_r($cities);




      ?>
      
   </body>
</html>