<?php 

/* Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

Interfaces are declared with the interface keyword:

Syntax
<?php
interface InterfaceName {
  public function someMethod1();
  public function someMethod2($name, $color);
  public function someMethod3() : string;
}
?>


Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

    Interfaces cannot have properties, while abstract classes can
    All interface methods must be public, while abstract class methods is public or protected
    All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
    Classes can implement an interface while inheriting from another class at the same time

    To implement an interface, a class must use the implements keyword.

A class that implements an interface must implement all of the interface's methods.


*/

// Interface definition
interface Animal {
    public function makeSound();
  }
  
  // Class definitions
  class Cat implements Animal {
    public function makeSound() {
      echo " Meow ";
    }
  }
  
  class Dog implements Animal {
    public function makeSound() {
      echo " Bark ";
    }
  }
  
  class Mouse implements Animal {
    public function makeSound() {
      echo " Squeak ";
    }
  }
  
  // Create a list of animals
  $cat = new Cat();
  $dog = new Dog();
  $mouse = new Mouse();
  $animals = array($cat, $dog, $mouse);
  
  // Tell the animals to make a sound
  foreach($animals as $animal) {
    $animal->makeSound();
    echo "<br>";
  }

  /* Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

    Traits are declared with the trait keyword:
    
    trait TraitName {
  // some code...
    }

    class MyClass {
    use TraitName;
    }

    */
    trait message1 {
        public function msg1() {
          echo "OOP is fun!<br> ";
        }
      }
      
      trait message2 {
        public function msg2() {
          echo "OOP reduces code duplication!";
        }
      }
      
      class Welcome {
        use message1;
      }
      
      class Welcome2 {
        use message1, message2;
      }
      
      $obj = new Welcome();
      $obj->msg1();
      echo "<br>";
      
      $obj2 = new Welcome2();
      $obj2->msg1();
      $obj2->msg2();

  
      
