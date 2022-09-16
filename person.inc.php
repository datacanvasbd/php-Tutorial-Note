<?php 

/* class Person {
    private $first = "Daniel";
    private $last = "Nielsen";
    private $age = "28";
    protected $second = "Tiger";
    public $third = "Azam";

    // Here Allow Private Property
    public function owner(){
        $a = $this->first;
        return $a;
    }

}

class Pet extends Person {

    public function owner(){
        $a = $this->second;
        $b = $this->third;
        echo $b;
        echo "<br>";
        return $a;
    }
} */



/* class Person {

    // Properties
    public $name;
    public $eyeColor;
    public $age;

    // Methods

    public function setName($newName){
        $this->name = $newName;

    }
} */

/* class Person {

    // Properties
    private $name;
    public $eyeColor;
    public $age;

    // Methods

    public function __construct($nname,$neyeColor,$nage){
        $this->name = $nname;
        $this->eyeColor = $neyeColor;
        $this->age = $nage;
    }

    //Method
    public function setName($newName){
        $this->name = $newName;
    }

    public function getName(){
        return $this->name;
    }

    public function __destruct(){

    }
} */


class NewClass {

    public $data = "I am a property";

    public function __construct(){
        echo "This Method auto call when start this class<br>";

    }

    public function setNewProperty($newdata){
        $this->data = $newdata;
    }

    public function getProperty(){
        return $this->data;
    }

    public function __destruct(){
        echo "<br> This text auto call when end class";
    }
}