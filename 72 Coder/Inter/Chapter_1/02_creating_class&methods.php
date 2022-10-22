<?php
class Car{
    public $name = "BMW";
    public function getName(){
        echo "this is testing"."<br>";
    }
    // method overloading
    public function setName($name){
        echo "the car name is".$name;
    }
}
$obj = new Car();
echo $obj->name;
$obj->getName()."<br>";
$obj->setName('light Turck');
?>