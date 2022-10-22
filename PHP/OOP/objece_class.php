<?php
class car{
    private $name ;
    public $price ;

    public function getCarName($carName){ // void funciton
        $this->name = $carName;
        return $this->name;
    }
    public function getCarPrice($carPrice){
        $this->price = $carPrice;
        echo $this->price;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($userName){
        $this->name = $userName;
    }

}
$result = new car();
$result->setName('abx');
$name = $result->getName();
echo $name;

// echo $result->name;
// $name = $result->getCarName('something');
// echo $name;
// $result->getCarPrice('20000');

?>