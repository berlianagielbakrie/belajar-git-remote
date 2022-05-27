<?php

/**Expression 
 * 
 * Expression adalah apapun yang memiliki nilai atau value
 * 
 * misal
 * $a = 5;
 * $b = $a;
 * 
 * $a = 5;Ketika kita menuliskan "5", maka tentu itu adalah
 *        nilai, oleh karena itu 5 disebut expression
 * lalu, kita menulis kode $b = $a; 
 * $a bisa ktia bilang sebagai expression karena $a adalah nilai 5
*/


/**statement
 * 
 * sebuah statement berisikan execution komplit, dan diakhiri 
 * dengan titik koma
 * 
 * misal 
 * $nama = "Komang doni kusuma";
 * 
 * echo $name;
 * 
 * $date = new DateTime();
 * 
 * ini semua disebut stament.
 
 */


 /**block
  * 
  * block adalah kumpulan statement yang terdiri dari
  nol/ lebih statement.

  * block di awali dan diakhiri dengan kurung kurawal {}

  misal 

  function runApp($name)
  {
      echo "Start Program". PHP_EOL;
      echo "Hello $name" . PHP_EOL;
      echo "End Program" . PHP_EOL;
  }

  ini disebut dengan blok.
 */