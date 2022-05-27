<?php

/**is statement
 * 
 * if(expression)
 * statement;
 * 
 * if(expression) {
 * statement1;
 * statement2;
 * }
 */

 $nilai = 60;
 $absen = 90;

 if ($nilai >= 70 && $absen >= 70){
     echo "Anda Lulus" . PHP_EOL;
 }

 /**else statement */

 if ($nilai >= 80 && $absen >= 70){
    echo "Anda Lulus" . PHP_EOL;
} else {
    echo "Anda Tidak Lulus" . PHP_EOL;
}

/**else if statement */

if ($nilai >= 70 && $absen >= 70){
    echo "Anda Lulus dengan nilai A" . PHP_EOL;
} else if($nilai >= 60 && $absen >= 60){
    echo "Anda lulus dengan nilai B" . PHP_EOL;
}else{
    echo "Anda tidak Lulus" . PHP_EOL;
}