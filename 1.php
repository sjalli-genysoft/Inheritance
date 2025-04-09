<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
    
  }
}

// Strawberry is inherited from Fruit
class carrot extends Fruit {
  public function message() {
    echo "Am I a fruit or a vegetable? "; 
  }
}

$carrot = new carrot("carrot", "orange");
$carrot->message();
echo '<br>';
$carrot->intro();
?>
</body>
</html>