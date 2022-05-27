<?php 

/**Function
 * 
 * - cara mendeklarasikan function yaitu didalam blok class
 * - untuk mengakses function kita bisa menggunakan tanda ->
 * diikuti dengan nama methodnya.
 * 
 * 
 */

 require_once "2.class.php";

 $person = new Person("Komang","bali");

 // ini adalah lanjutan dari this keyword

$person->name ="EKO";

 $person->sayHello("Budi");

 //contoh lain

 $komang = new Person("Doni","lampung");
 $komang->name = "vincent";
 $komang->sayHello(null);

 $person->info();
 $komang->info();