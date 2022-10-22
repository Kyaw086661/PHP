<?php
echo "hello world";
echo "<br>";
$name = "KTl";
$age = 20;
echo "name is ".$name." age is ".$age;
$array = ['one','two','three'];
echo "<pre>";
var_dump($array);
echo count($array);// length get
$assoArray = [
    "name"=>'kyaw kyaw',
    "age"=> '30',
    'gender' => 'male',

];
var_dump($assoArray['name']);
$car= [
    'toyota','BMW','Light Truck',
];
for($i=0;$i<count($car);$i++){
    echo $car[$i]."<br>";
};

$fruit = 'apple';
 echo $fruit == 'orange' ? true:false;
echo "<hr>";
//build in method

 $name = "kyaw thu lin";
 echo str_word_count($name);//3
 echo strrev($name);
echo "<br>";
echo str_shuffle($name);
echo "<br>";
echo strpos($name,'thu');//5
echo "<br>";
echo substr($name,0,7);//kyaw th
echo "<br>";
echo strtoupper($name);// all upper
echo "<br>";
echo strtolower($name);// all lower
echo "<br>";
echo ucfirst($name);// first K upper case
echo "<br>";
echo ucwords($name);// first K T L upper case
echo "<br>";
echo "<hr>";
$test = "<h1><i>This is testing</i></h1>";
echo $test;
echo "<br>";
echo strip_tags($test);// h1 i tag remove and hide
echo "<br>";
echo str_replace('thu','gyi',$name);
echo "<br>";
echo ltrim($name);
echo "<br>";
$myName = "    kyaw thu lin   123  ";
echo (rtrim($myName));
echo "<br>";
echo (ltrim($myName));// delete space
echo "<br>";
$Name = "aaa kyaw thu lin";
echo (trim($Name,"aaa"));//delete aaa
$naming = "kyaw/thu/line";
// var_dump(explode('/',$naming,4));// array 3 devide
echo "<hr>";

// math 
echo pow(9,3);//729
echo "<br>";
echo sqrt(9);//3
echo "<br>";
echo abs(-9);//9
echo "<br>";
echo ceil(1.1);//2
echo "<br>";
echo floor(1.9);//1
echo "<br>";
echo round(1.6);// 2
echo "<br>";
echo rand();// random
echo "<br>";
echo rand(1,10);// random 1 to 10
echo "<br>";
$arr = [1,2,3,45,454,33,46,5,3,5,6];
echo max($arr);// 454
echo "<br>";
echo min($arr);



