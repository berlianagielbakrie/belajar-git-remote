<?php

/**trait
 * 
 * - selain class dan interface, diPHP terdapat fitur lain beranama trait
 * - trait mirip dengan abstract class, kita bisa membuka konkrit function atau abstract function
 * - yang membedakan adalah, di trait kita bisa tambahkan ke dalam class lebih dari satu
 * - trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class dengan trait
 * - secara sederhana trait adalah digunakan untuk menyimpan function function yang bisa digunakan 
 * ulang di beberapa class
 * - untuk menggunakan trait di class kita bisa menggunakan kata kunci use
 * 
 */


 require_once "data/saygoodbye.php";

 use Data\Traits\{Person, SayHello, SayGoodBye};

 $person = new Person();
 $person->goodBye("Komang");
 $person->hello("doni");


 /**Trait Properties
  * 

  - berbeda dengan interface, di trait kita bisa menambahkan properties
  - dengan menambahkan properties, secara otomatis class tersebut akan memiliki properties yang ada ditrait

  */

  $person->name = "Eko";
  var_dump($person);