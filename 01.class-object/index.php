<?php 
class Fruit{
  //properties
  public $color;
  public $name;

  //methods
  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getColor()
  {
    echo $this->color;
  }
}

$banana = new Fruit();
$banana->setColor('yellow');
$banana->getColor();
echo '<br>';

//check instance of a specific Class
var_dump($banana instanceof Fruit);
