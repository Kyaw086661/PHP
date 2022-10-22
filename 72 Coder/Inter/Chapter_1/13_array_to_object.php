<?php
$arr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => "foru"
];
$obj = (object) $arr;
echo $arr['one'];
echo "<hr>";
echo "<pre>";
var_dump($arr);
echo "<hr>";
echo $obj->two;
echo "<hr>";
echo "<pre>";
var_dump($obj);
?>