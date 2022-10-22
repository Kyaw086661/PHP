<?php
class Member{
    public $name = "mg mg";
    public $age = 30;
    public $subject = "PHP";
    public function friendship(){
        echo "hello firend";
    }
    
}
class GoldMember extends Member{

}
// $member = new Member();
$goldMember = new GoldMember();
echo $goldMember->name;
?>