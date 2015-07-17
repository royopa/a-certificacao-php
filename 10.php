<?php
$letters1 = array("A" => "A", "b" => "B", "c" => "C", "D" => "D", "E" => "E");
$letters2 = array("a" => "a", "b" => "b", "c" => "c", "d" => "d", "f" => "f");
function test_print($item2, $key) { echo "[$key]= $item2; ";
}
$letters = array_intersect_key($letters1, $letters2);
array_walk($letters, 'test_print');
?>
