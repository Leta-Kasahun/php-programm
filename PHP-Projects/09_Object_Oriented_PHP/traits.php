<?php
trait message1{
    public function msg1(){
        echo "PHP OOP is fun!<br>";
    }

    public function msg2(){
        echo "Traits reduce code duplication! <br>";
    }
 public function msg3(){
    echo "Hello world!<br>";
 }

}
class Welcome{
    use message1;
}

$obj1=new Welcome();
$obj1->msg1();
$obj1->msg2();
$obj1->msg3();
?>