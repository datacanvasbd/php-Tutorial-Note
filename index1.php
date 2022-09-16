<?php
include 'includes/person.inc.php';
?>


<!DOCTYPE html>
   <head>
    <meta charset="utf-8">
    <title></title>
   </head>
   <body>
      <?php
      /*   
         $per01 = new Person();
         echo $per01->owner();

         echo "<br>";
         $pet01 = new Pet();
         echo $pet01->owner(); */
/* 
    Class Avoid this complex repeted work

         $name01 = "Daniel";
         $eyeColor01 = "Blue";
         $age01 = 28;

         $name02 = "John";
         $eyeColor02 = "Black";
         $age02 = 30; */

       /*   $person1 = new Person();
         $person1->setName("Azam");
         echo $person1->name;


         $person2 = new Person();
         $person2->setName(" Shafiul");
         echo $person2->name; */
/*
         $person1 = new Person("Azam","Bloack",40);
         echo $person1->name;
         echo $person1->eyeColor;
         $person1->setName("John");
         echo $person1->name;
       */
/* 
      $person1 = new Person("Azam","Bloack",40);
      echo $person1->getName();
 */

   $object = new NewClass;
   echo $object->getProperty();
      ?>
   </body>
</html>