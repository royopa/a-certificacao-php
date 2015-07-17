<?php
$arr = array(1,2,3);
foreach($arr as $k=>&$v)
{
    $v+=1;
}
?>
