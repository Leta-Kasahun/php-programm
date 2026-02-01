<?php

class Car{
   private $brand;
   private $color;
 public $types="Car";

//    constractor a method
public function __construct($brand,$color="none")
{
  $this->brand=$brand;
  $this->color=$color;  
}

public function getBrand(){
    return $this->brand;
}
public function getColor(){
    return $this->color;
}
public function getCarInfo(){
    return "Type: ".$this->types." Brand: ".$this->brand." Color: ".$this->color;
}
}

$car01=new Car("Volvo","Green");
$car02=new Car("BMW");
$car03=new Car("Toyota","yellow");
echo $car01->types;
echo "<br>";
echo $car01->getBrand();
echo "<br>";
echo $car01->getColor();
echo "<br>";
echo $car01->getCarInfo();

?>
