<?php
class Testing{
    private $name= "Kyaw Kyaw";
    public function getName(){
        return $this->name;
    }
}
$test = new Testing();
echo $test->getName();
?>