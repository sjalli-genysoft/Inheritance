<?php
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

class carrot extends Fruit {   
  public function message() {
    echo "Am I a fruit or a vegetable? ";   
    // Call protected function from within derived class - OK 
    $this -> intro();   
  }   
}   
$carrot = new carrot("carrot", "orange");  // OK. __construct() is public 
$carrot->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>