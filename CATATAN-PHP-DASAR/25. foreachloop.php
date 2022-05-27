<?php

/**loop ini bisa digunakan untuk mengakses array */

$names = ["komang", "doni", "kusuma"];

for($i = 0; $i<count($names); $i++){
    echo "HELLO $names[$i]".PHP_EOL;
}

$nama = ["Komang","doni","kusuma","berlian","agiel","cahyaning","kinanti"];

foreach($nama as $a){
    echo "Hello $a".PHP_EOL;
}


$person = [
    "first name" =>"Komang",
    "middle name" => "doni",
    "last name" => "kusuma"
];

foreach($person as $c => $d){
    echo "Hello $c : $d".PHP_EOL;
}