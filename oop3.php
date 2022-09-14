 <?php
 // PHP - Inheritance and the Protected Access Modifier
 class Fruit {
   public $name;
   public $color;
   public function __construct($name, $color) {
     $this->name = $name;
     $this->color = $color;
   }
   protected function intro() {
     echo "The fruit is {$this->name} and the color is {$this->color}.";
   }
 }
 
 class Strawberry extends Fruit {
   public function message() {
     echo "Am I a fruit or a berry? <br>";
     // Call protected method from within derived class - OK
     $this -> intro();
   }
 }
 
 $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
 $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
 
 // PHP - Overriding Inherited Methods

 echo "<br>";

 class Fruit1 {
    public $namee;
    public $colors;
    public function __construct($name, $color) {
      $this->namee = $name;
      $this->colors = $color;
    }
    public function introe() {
      echo "The fruit is {$this->namee} and the color is {$this->colors}.";
    }
  }
  
  class Strawberrye extends Fruit1 {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->namee = $name;
      $this->colors = $color;
      $this->weight = $weight;
    }
    public function introe() {
      echo "<hr>The fruit is {$this->namee}, the color is {$this->colors}, and the weight is {$this->weight} gram.";
    }
  }
  
  $strawberrye = new Strawberrye("Strawberry", "red", 50);
  $strawberrye->introe();


  /*

  PHP - The final Keyword

The final keyword can be used to prevent class inheritance or to prevent 
method overriding.

final class Fruit {
  // some code
}

// will result in error
class Strawberry extends Fruit {
  // some code
}

class Fruit {
  final public function intro() {
    // some code
  }
}

class Strawberry extends Fruit {
  // will result in error
  public function intro() {
    // some code
  }
}


*/