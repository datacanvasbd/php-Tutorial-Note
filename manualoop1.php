<?php 
/* OOP from Manual
A class may contain its own constants, variables (called "properties"), and functions (called "methods").



*/

class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

/* The pseudo-variable $this is available when a method is called from within an object context. $this is the value of the calling object.



class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();

A::foo();

$b = new B();
$b->bar();

B::bar();

To create an instance of a class, the new keyword must be used. An object will always be created unless the object has a constructor defined that throws an exception on error. Classes should be defined before instantiation (and in some cases this is a requirement).



$instance = new SimpleClass();

// This can also be done with a variable:
$className = 'SimpleClass';
$instance = new $className(); // new SimpleClass()


*/

class ClassA extends \stdClass {}
class ClassB extends \stdClass {}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function getSomeClass(): string
{
    return 'ClassA';
}

var_dump(new (getSomeClass()));
echo "<br>";
var_dump(new ('Class' . 'B'));
echo "<br>";
var_dump(new ('Class' . 'C'));
echo "<br>";
var_dump(new (ClassD::class));
echo "<br>";

echo "<hr>";

class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);
echo "<br>";
$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);
echo "<br>";
$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
echo "<br>";