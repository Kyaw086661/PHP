<?php
class Member{
public function __get($var){
    echo "you are trying to get {$var} ";
}
public function __set($var,$value){
    echo "you are trying to set {$var} property value is {$value}";
}
}
$obj = new Member();
 $obj->name="mg Mg";
?>