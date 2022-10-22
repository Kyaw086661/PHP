<?php
class Index{
    public $name = "mg mg";
public function __isset($name){
    echo $name;
}
public function __unset($name){
    echo $name;
}
}
$obj = new Index();
var_dump(isset($obj->name));
echo "<br>";
isset($obj->apple);
echo "<br>";

unset($obj->database);
?>