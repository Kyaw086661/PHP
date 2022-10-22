<?php
class Member{
    public function __construct(){
        echo "I am parent constructor <br>";
    }
}
class goldMember extends Member{
    public function __construct(){
        parent::__construct();
        echo "i am form child constructor";
    }
}
class diamondMember extends Member{
   public function __construct(){
    echo "i m diamond member";
   }
}
$obj = new goldMember();
$dia = new diamondMember();
?>