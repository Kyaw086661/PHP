<?php
class Member{
    public $name = "mg mg";
    public function FriendShip(){
        echo "I'm your friends <br>";
    }
    public function doIt(){
        echo "just do it ";
    }
}
class goldMember extends Member{
 public function doIt(){
    $this->name = "aung aund";
    echo "I am web developer and name is ".$this->name;
 }
}
$obj = new goldMember();
$obj->friendship();
$obj->doIt();
?>