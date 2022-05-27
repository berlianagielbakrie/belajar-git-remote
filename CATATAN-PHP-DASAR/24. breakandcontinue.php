<?php

/**perbedaan break and continue
 * 
 * jika dalam loop break akan menghentikan semua loop
 * 
 * tapi continue akan menjadi skip pada loop saat itu saja
 */

 $nilai = 1;

 while(true){
     echo "Hello Break ke - $nilai" . PHP_EOL;
     $nilai++;

     if($nilai > 10){
         break;
     }
 }


 for($nilai = 1; $nilai <= 100; $nilai++){
     if($nilai % 2 ==0){
         continue;
     }
  
    echo "Hello Continue ke - $nilai". PHP_EOL;

 }