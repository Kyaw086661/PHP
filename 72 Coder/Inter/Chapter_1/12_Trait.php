<?php
trait One{
   public $name = "mg mg";
   public function traitOne(){
    echo "this is trait one";
   }
}
trait Two{
    public $age = 20;
    public function traitTwo(){
        echo "this is trait two";
    }
}
trait Three{
    use One,Two;
    public function traitThree(){
        echo "this is trait three";
    }
}
class Main{
    use Three;
}
$obj = new Main();
echo $obj->name;
echo "<br>";
echo $obj->age;
echo "<br>";
$obj->traitOne();
echo "<br>";

$obj->traitTwo();
echo "<br>";

$obj->traitThree();

?>