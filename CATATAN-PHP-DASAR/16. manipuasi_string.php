<?php

/**Dot operator
 * 
 * pengganti tanda +
 * 
 * untuk menambahkan strin dengan string / data lain
 * 
 */

$nama = "Komang doni kusuma";

echo "Nama : " . $nama . PHP_EOL;


/**Konversi ke number atau sebaliknya
 * 
 * cukup tambahkan (tipe data) dibelakang datanya
 * 
 */

 $a = (string)100;
var_dump($a);

 $b = (int)"100";
 var_dump($b);

 $c = (float)"100.1";
 var_dump($c);


 /**mengakses karakter
  * 
  eror jika akses melebihi jumlah karakter

  */

$nama = "Komang";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;


/**variable parsing
 * 
 * 
 */

$nama = "Komang";
echo "Hello $nama, selamat belajar php".PHP_EOL;


/**curly brace / kurung kurawal({}) 
 * 
 * 
*/

$nama = "Komang";
echo "Hello {$nama}s, selamat belajar php".PHP_EOL;