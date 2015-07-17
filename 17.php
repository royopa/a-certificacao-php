<?php
$array = array(1 => 0, 2, 3, 4);
array_splice($array, 3, count($array), array_merge(array('x'),
array_slice($array, 3)));
print_r($array);  ?>
?>
