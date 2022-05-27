<?php

function sayHello($name){
    echo "Hello $name" . PHP_EOL;
}

sayHello("komang");
sayHello("berlian");


/**jika kita memanggil dengan sayHello();
 * maka dia akan eror, karena $name harus diisi sesuatu
 * 
 * oleh karena itu, kita buat default dari $name.
 */

 function halo($nama = "Tidak Punya Nama"){
     echo "Hallo  $nama" . PHP_EOL;
 }

 halo("Komang");
 halo("berlian");
 halo();

 /**kesalah default argument value
  * 
  function sayHello($firstname = "tanpa nama", $lastname){
      echo "Hello $firstname $lastname" . PHP_EOL;
  }

  sayHello("eko");
  
  kalau seperti akan eror.
  
  function sayHello($firstname , $lastname = ""){
      echo "Hello $firstname $lastname" . PHP_EOL;

  }

  sayHello("eko");

  nah ini yang bener
  */

  /**function argument dengan tipe data */

  function sum(int $first, int $last){
      $total = $first + $last;
      echo "total $first + $last = $total".PHP_EOL;
  }

  sum(100,100);
  sum("100","100");
  sum(10.1,10.2);

  /**tapi kalau memanggilnya dengan array maka error
   * 
   * sum([],[]);
   * 
   * ini eror
   */


   /**variable length argument list 
    * 
    merupakan kemampuan dimana kita bis amembuat sebuah parameter
    yang menerima banyak value 
   */


function sumAll(...$values){
    $total = 0;

    foreach($values as $value){
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total". PHP_EOL;
}

sumAll(1,2,3,3,1,2,3,3,1,2,);