<?php

class Fruit{
    public $name;
    protected $color;
    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
protected function intro(){
    echo "The fruit is: {$this->name} and The color is: {$this->color} <br>";
}
}
class Strawberry extends Fruit{
    public function message(){
        echo "Am I a fruit or berry? <br>";
        $this->intro();
       
        }
    
}

class Vehicle{
    protected $speed;
    public function __construct($speed){
        $this->speed=$speed;
    }
    protected function info(){
        echo " The car speed is: {$this->speed}km/hr <br>";
    }
}
class Car extends Vehicle{
    public $brand;
    public function __construct($speed,$brand)
    {
     parent::__construct($speed);
     $this->brand=$brand;
    }

    public function display(){
        $this->info();
        echo "Brand is : {$this->brand}";
    }
}
$straw1=new Strawberry("Strawberrry","Red");
$straw1->message();
$car1=new Car(320,"Toyota");
$car1->display();

?>