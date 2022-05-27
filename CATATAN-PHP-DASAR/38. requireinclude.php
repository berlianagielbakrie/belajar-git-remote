<?php

/**
 * - saat membuat aplikasi, ada baiknya tidak dibuat dalam satu file
 * - lebih baik dipisah ke beberapa file agar kode program tidak 
 * terlalu bertumpuk di satu file
 * - php memliki function require dan include yang bisa kita gunakan untuk 
 * mengambil file php lain
 * - lantas apa bedanya require dan include?
 * - pada require, jika file yang kita ambil tidak ada, maka program akan error 
 * dan program terhenti
 * - pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan,
 * namun program tetap berjalan.
 * 
 */

 /**saya sudah membuat file di dalam folder
  * library

  dan akan saya panggil disni
  */


/**require "library/myfunction.php";*/
include "library/myfunction.php";

echo sayhello("Eko","kurniawan");


/** selain itu juga ada yang dikenal dengan
 * - require_once
 * - include_once
 * 
 * function ini bisa mendeteksi jika kita sebelumnya pernah mengambil
 * file yang sama, maka tidak akan diambil lagi. 
 * 
*/


include_once "library/myfunction2.php";

echo sayhai("Komang","DOni");