<?php

/* PHP - The __construct Function

A constructor allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!

*/

class Fruit {
    public $name;
    public $color;
  
    function __construct($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
  
  $apple = new Fruit("Apple");
  echo $apple->get_name();

  echo "<hr>";
  class Fruits {
    public $namee;
    public $colors;

  function __construct($name, $color) {
    $this->namee = $name;
    $this->colors = $color;
  }
  function get_namee() {
    return $this->namee;
  }
  function get_colors() {
    return $this->colors;
  }
}

$apple = new Fruits("Apple", "red");
echo "Fruits name is ".$apple->get_namee();
echo "<br>";
echo "Color is ".$apple->get_colors();


/* PHP - The __destruct Function

A destructor is called when the object is destructed or the script is stopped or exited.

If you create a __destruct() function, PHP will automatically call this function at the end of the script.

Notice that the destruct function starts with two underscores (__)!

*/
echo "<hr>";
class Fruite {
    public $namee;
    public $colors;
  
    function __construct($name, $color) {
      $this->namee = $name;
      $this->colors = $color;
    }
    function __destruct() {
      echo "<br> The fruit is {$this->namee} and the color is {$this->colors}.";
    }
  }
  
  $apple = new Fruite("Apple", "red");


  /* There are three access modifiers:

    public - the property or method can be accessed from everywhere. This is default
    protected - the property or method can be accessed within the class and by classes derived from that class
    private - the property or method can ONLY be accessed within the class


     class Fruit {
        public $name;
        protected $color;
        private $weight;
                }

        $mango = new Fruit();
        $mango->name = 'Mango'; // OK
        $mango->color = 'Yellow'; // ERROR
        $mango->weight = '300'; // ERROR



    */


    /*
    class Fruit {
    public $name;
    public $color;
    public $weight;

        function set_name($n) {  // a public function (default)
            $this->name = $n;
        }
        protected function set_color($n) { // a protected function
            $this->color = $n;
        }
        private function set_weight($n) { // a private function
            $this->weight = $n;
        }
        }

    $mango = new Fruit();
    $mango->set_name('Mango'); // OK
    $mango->set_color('Yellow'); // ERROR
    $mango->set_weight('300'); // ERROR

*/

/* PHP - What is Inheritance?

Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword.

*/
echo "<hr>";

class Fruit11 {
    public $name2;
    public $color2;
    public function __construct($name, $color) {
      $this->name2 = $name;
      $this->color2 = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name2} and the color is {$this->color2}.";
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit11 {
    public function message() {
      echo "Am I a fruit or a berry? <br>";
    }
  }
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  $strawberry->intro();