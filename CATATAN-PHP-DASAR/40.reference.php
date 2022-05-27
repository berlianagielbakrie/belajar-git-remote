<?php

/**Reference
 * 
 * - reference adalah mengakses variable yang sama dengan nama variabel yang berbeda
 * - reference di php tidak sama dengan di bahasa lain yang memiliki fitur pointer
 * - analogi reference itu sseperti file,
 * jika variable adalah file dan valuenya adalah isi file 
 * maka reference adalah membuat shortcut di windows terhadap file yang sama
 * - saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya pun berubah
 * - untuk membuat reference terhadap variable, kita bisa menggunakan karakter &
 * 
 */

 //assign by reference

 $nama = "komang";

 $jalanpintas = &$nama;

 $jalanpintas = "doni";
 
 echo $nama . PHP_EOL;


 //pass by reference

 function saya(int &$value){

    $value++;
 }

 $kamu = 1;
 saya($kamu);

 echo $kamu . PHP_EOL;

 //returning references

 /**
  * php juga bisa mengembalikan reference pada function
  namu hati hati, gunakan fitur ini jika memang ada alasannya,
  karena fitur ini bisa membingungkan
  */

  function &mbah(){
      static $value = 100;
      return $value;
  }

  $a = &mbah();
  $a = 200;

  $b = &mbah();

  echo $b . PHP_EOL;