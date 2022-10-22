<?php
class Testing{
    public $name = "Mg Mg";
    public function changeName(){
        $this->name = "Aung Aung";
    }
}
$aa = new Testing();
$aa->changeName();
echo $aa->name."<br>";
$bb = new Testing();
echo $bb->name;

?>
