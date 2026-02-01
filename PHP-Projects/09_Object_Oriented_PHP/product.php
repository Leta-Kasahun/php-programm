<?php
class Product{
    public $name;
    public $price;
    public $tax;
    function __construct($name,$price,$tax=0.1){
        $this->name=$name;
        $this->price=$price;
        $this->tax=$tax;
    }
   function getPriceWithTax(){
    $totalPrice=$this->price+$this->price*$this->tax;
    return "Name: {$this->name} price: {$totalPrice}";
   }
}

$product1=new Product("Laptop",60000);
echo $product1->getPriceWithTax();
?>