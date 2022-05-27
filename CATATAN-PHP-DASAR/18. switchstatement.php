<?php


$nilai = "E";

if($nilai == "A"){
    echo "Anda Lulus Dengan Sangat Baik" . PHP_EOL;
}else if($nilai == "B" || $nilai =="C"){
    echo "Anda Lulus " . PHP_EOL;
}else if($nilai == "D"){
    echo "Anda Tidak Lulus " . PHP_EOL;
}else{
    echo "Mungkin anda salah jurusan" . PHP_EOL;
}

/**bentuknya dalam switch statement */

switch($nilai){
    case "A":
        echo "Anda Lulus Dengan Sangat Baik" . PHP_EOL;
        break;
    
    case "B":
    case "C":
        echo "Anda Lulus " . PHP_EOL;
        break;
    
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
        
}