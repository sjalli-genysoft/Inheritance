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
  }
}

// Try to call all three methods from outside class
$carrot = new carrot("carrot", "orange");  // OK. __construct() is public
$carrot->message(); // OK. message() is public
echo '<br>';
$carrot->intro(); // ERROR. intro() is protected  
?>