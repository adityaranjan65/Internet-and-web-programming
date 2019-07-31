<?php
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
$d=array_reverse($fruits,true);
foreach ($d as $key => $val) {
    echo "$key = $val\n";
}
?>