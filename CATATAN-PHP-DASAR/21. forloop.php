<?php

/**sintak for loop
 * 
 * for(init statement; kondisi; post statement){
 *      //block perulangan 
 * }
 * 
 * flow nya itu
 * 
 * dari init statement, cek kondisi kalau true maka blok perulangan
 * akan di eksekusi, lalu post statement akan dieksekusi
 * setelah itu cek kondisi lagi, kalau true maka blok perulangan
 * akan di eksekusi, lalu post statement akan dieksekusi
 */

 /**for loop yang selalu true
  * 
  * for(; ;){
     echo "Hello For loop" . PHP_EOL;
 }*/
 


for($nilai = 1; $nilai <= 10; $nilai++){
    echo "Hello For LOOP KE- $nilai".PHP_EOL;
}