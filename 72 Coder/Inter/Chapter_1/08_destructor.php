<?php
class Destructor{
    var $t = 0;
    public function __construct(){
        echo "i am constructor and start working <br>";
    }
    public function looping(){
        for($i = 0 ; $i<100; $i ++){
            $this->t +=$i;
        }
        echo "the result is". $this->t."<br>";
    }
    public function __destruct(){
        echo "i am destructor";
    }
}
$obj = new Destructor();
$obj->looping();

?>