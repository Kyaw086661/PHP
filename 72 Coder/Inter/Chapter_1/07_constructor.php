<?php

class Constructor{
    public function __construct($para1,$para2){
        echo "hello i'm constructor and the result is". $para1+ $para2;
    }
}
$obj = new Constructor(20,30);
?>