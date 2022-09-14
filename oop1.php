<?php 
/* Object-oriented programming has several advantages over procedural programming:

    OOP is faster and easier to execute
    OOP provides a clear structure for the programs
    OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
    OOP makes it possible to create full reusable applications with less code and shorter development time

Tip: The "Don't Repeat Yourself" (DRY) principle is about reducing the repetition of code. 

*/

// Classes and objects are the two main aspects of object-oriented programming.
// Like Food is class and object of this class apple,banana and mango

// A class is a template for objects, and an object is an instance of class.

/* Let's assume we have a class named Fruit. A Fruit can have properties 
like name, color, weight, etc. We can define variables like $name, $color, 
and $weight to hold the values of these properties.

*/

/* A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). 
All its properties and methods go inside the braces: */


/* Stucture of Class like
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
*/

// Classes are nothing without objects! We can create multiple objects from a class.
// Objects of a class is created using the new keyword.

class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($namee) {
      $this->name = $namee;
    }

    function get_name() {
      return $this->name;
    }

    function set_color($color) {
        $this->color = $color;
      }
      function get_color() {
        return $this->color;
      }

  }
  
  $apple = new Fruit();
  $banana = new Fruit();
  $apple->set_name('Apple');
  $banana->set_name('Banana');

  $apple->set_color('Red-Write');
  $banana->set_color('Yellow');
  
  echo $apple->get_name();
  echo "<br>";
  echo $banana->get_name();
  echo "<br>";

  echo "<br>";
  echo " Fruit is ". $apple->get_name(). " & It's Color: " . $apple->get_color();

  echo "<br>";
  echo "Color: " . $banana->get_color();

  /* 
  The $this keyword refers to the current object, and is only available inside methods.

  class Fruit {
  public $name;
  }
   $apple = new Fruit();

  
   So, where can we change the value of the $name property? There are two ways:

   1. Inside the class (by adding a set_name() method and use $this):

   class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
    }
    $apple = new Fruit();
    $apple->set_name("Apple");

    echo $apple->name;

    2. Outside the class (by directly changing the property value):

    class Fruit {
  public $name;
    }
    $apple = new Fruit();
    $apple->name = "Apple";

    echo $apple->name;

    */

    echo "<br>";
    class Fruits {
        public $namee;
      }
      $applee = new Fruits();
      $applee->namee = "Apples";
      
      echo $applee->namee;

      // use the instanceof keyword to check if an object belongs to a specific class:
      echo "<br>";
      var_dump($applee instanceof Fruits);
