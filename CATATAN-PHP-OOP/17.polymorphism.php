<?php

/**Polymorphism
 * 
 * - plymorphism berasal dari bahasa yunani yang berarti banyak bentuk
 * - dalam OOP, polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain
 * - polymorphism erat hubungannya dengan inheritance
 */


 require_once "data/Programmer.php";

 $company = new Company();
 $company->programmer = new Programmer("Eko");
 var_dump($company);

 /**jadi selain membuat tipe data dari induk class nya, dengan 
  * menggunakan polymorphism kita juga bisa mengambil tipe data dari semua anakannya.

  */

 $company->programmer = new BackendProgrammer("Komang");
 var_dump($company);

 $company->programmer = new FrontendProgrammer("DOni");
 var_dump($company);

 sayHelloProgrammer(new Programmer("Komang"));

 sayHelloProgrammer(new BackendProgrammer("doni"));

 sayHelloProgrammer(new FrontendProgrammer("kusuma"));