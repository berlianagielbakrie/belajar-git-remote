<?php

require_once "2.class.php";

/**constructor
 * 
 * - saat kita membuat objek, maka kita seperti memanggil sebuah function,
 * karena kita menggunakan kurung ()
 * - didalam class php, kita bisa membuat constructor,
 * constructor adalah function yang akan dipanggil saat pertama kali object
 * dibuat
 * - kita bisa memberi parameter pada constructor
 * -  nama __construct()
 * - dan ketika memanggil ogbject kita wajib memasukkan parameter yang telah 
 * dibuat di constructor
 * 
 * // lanjut di file class
 * 
 * 
 */

 $person = new Person("Komang","bali");

 var_dump($person);