<?php
/* Static methods can be called directly - without creating an instance of the class first.

Static methods are declared with the static keyword:
*/

class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  // Call static method
  greeting::welcome();


  /*    class greeting {
        public static function welcome() {
          echo "Hello World!";
        }
      
        public function __construct() {
          self::welcome();
        }
      }
      
      new greeting();

      */

      // Static methods can also be called from methods in other classes.
      //  To do this, the static method should be public:

      echo "<hr>";
      class greetings {
        public static function welcome() {
          echo "Hello Bangladesh";
        }
      }
      
      class SomeOtherClasss {
        public function message() {
            greetings::welcome();
        }
      }

      $stafuc = new SomeOtherClasss();
      $stafuc->message();

  /* To call a static method from a child class, use the parent keyword inside the child class.
   Here, the static method can be public or protected.
  */

echo "<hr>";
  class domain {
    protected static function getWebsiteName() {
      return "W3Schools.com";
    }
  }
  
  class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
      $this->websiteName = parent::getWebsiteName();
    }
  }
  
  $domainW3 = new domainW3;
  echo $domainW3 -> websiteName;


  /* Static properties can be called directly - without creating an instance of a class.

Static properties are declared with the static keyword:

        class ClassName {
        public static $staticProp = "W3Schools";
        }
To access a static property use the class name, double colon (::), and the property name
ClassName::$staticProp; 

*/

echo "<hr>";

class pi {
    public static $value = 3.14159;
  }
  
  // Get static property
  echo pi::$value;

  /* A class can have both static and non-static properties. A static property can be accessed 
  from a method in the same class using the self keyword and double colon (::):

        class pi {
        public static $value=3.14159;
        public function staticValue() {
            return self::$value;
        }
        }

        $pi = new pi();
        echo $pi->staticValue();
        ?>

  */
  echo "<hr>";
  class pii {
    public static $value=3.14159;
  }
  
  class x extends pii {
    public function xStatic() {
      return parent::$value;
    }
  }
  
  // Get value of static property directly via child class
  echo x::$value;
  echo "<br>";
  // or get value of static property via xStatic() method
  $x = new x();
  echo $x->xStatic(); 




