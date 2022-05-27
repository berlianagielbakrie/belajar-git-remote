<?php

require_once "2.class.php";

/**constant
 * 
 * - properties di class bisa diubah, mirip seperti variable
 * - di class juga kita membuat constant, data yang tidak bisa diubah
 * - menggunakan kata kunci const dan usahakan namanya menggunakan 
 * kapital semua. 
 */

 const NAMA = "KOMANG DONI KUSUMA";
 const APP_VERSION = "1.0.0.0";

 echo NAMA . PHP_EOL;
 echo APP_VERSION . PHP_EOL;

 // lalu bagaimana cara memasukkan contant kedalam kelas
 // masuk ke 2.class

 //cara memanggil constant
// echo namaclass :: namaconstant;

echo Person :: AUTHOR . PHP_EOL;



