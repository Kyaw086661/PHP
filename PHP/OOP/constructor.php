<?php
class Animals{
    public $name;
    public $color;
    // public function __construct(){ 
    //getName(){}
        // $this->name = "aung net";
        // $this->color = "black";
    // }
    public function __construct($animalName,$animalColor){
        $this->name = $animalName;
        $this->color = $animalColor;
    }
    public function sleep(){
        echo "good night....";
    }
}

class Dog extends Animals
{
    public function greeting(){
        echo "hello this is dog";
    }
}

// $animal = new Animals("Shwe War",'yellow');
// echo $animal->color;
// $animal->getName();
// echo $animal->name;
// echo "<br>";
// $animal->sleep();
// echo "<br>";
$animal = new Animals("shwe war",'yellow');
$dog = new Dog('shwe war','black');
$dog->greeting();
echo "<br>";
$dog->sleep();
echo "<br>";
echo $dog->name;
echo "<br>";
echo $animal->name;


?>