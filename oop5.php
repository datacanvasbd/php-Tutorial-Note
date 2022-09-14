 <?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  // The child class may define optional arguments that are not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Hey Dear",$oth="Hey Brother") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    

    if($prefix==""){
    return "{$oth} {$prefix} {$name}";
    }
    else {
        {
            return "{$greet} {$prefix}{$separator} {$name}";
            }
    }
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
echo "<br>";
echo $class->prefixName("Azam");
?> 