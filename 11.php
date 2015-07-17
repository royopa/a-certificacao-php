<?php
$arr1 = array(10, 20, 30);
$arr2 = array(2=>30, 1=>20, 0=>10);
$arr3 = array('a'=>10, 'b'=>20, 'c'=>30);
var_dump($arr1==$arr2); //line 1
var_dump($arr1===$arr2); //line 2
var_dump($arr1==$arr3); //line 3
var_dump($arr1===$arr4); //line 4
?>
