<?php
class Setter_Getter{
    private $name = "MG MG";
    public function setName($userName){
        $this->name = $userName;
    }
    public function getName(){
        return $this->name;
    }
}
$obj = new Setter_Getter;
$obj->setName("Aung Aung");
echo $obj->getName();
?>