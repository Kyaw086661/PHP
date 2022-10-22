<?php
$arr = ['apple','mango','orange','banana','pineapple'];
echo count($arr);
echo "<br>";
echo current($arr);
echo "<br>";
echo end($arr);
echo "<br>";
echo array_rand($arr);//  index number randon
echo "<br>";
echo $arr[array_rand($arr)];// name randon
echo "<br>";
$number = range(0,20);
// var_dump($number);
var_dump(in_array('apple',$arr) ? true:false);// search in array
echo "<br>";
// associated array
$person = [
    "name" => "kyaw kyaw",
    'age'=> 49,
    'gender'=> 'male',
    'job' => 'web developer',
];
var_dump(array_key_exists('name',$person));
$name = "this is kyaw thu lin and his girlfriend";
echo "<pre>";
var_dump(explode(" ",$name));
echo "<pre>";
var_dump(implode("*",$arr));
var_dump(join("|",$arr));
echo "<br>";
$array = ['apple','mango','orange','banana','pineapple'];
echo $array[0];
echo "<br>";
array_push($array,"cononut");// back add
var_dump($array);
echo "<br>";
array_unshift($array,"potato");// firon add
var_dump($array);
echo "<br>";
array_pop($array);//delete back
var_dump($array);
echo "<br>";
array_shift($array);// delete front
var_dump($array);
echo "<hr>";
$array = ['apple','mango','orange','banana','pineapple'];
echo "<br>";
rsort($array);
for($i=0; $i<count($array);$i++){
    echo $array[$i]."<br>";
}

echo "<br>";
$person = [
    "name"=> "ktl",
    'age'=> 30,
    'job'=> 'developer,'
];
krsort($person);
var_dump($person);
