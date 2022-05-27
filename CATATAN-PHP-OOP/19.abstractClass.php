<?php

/**abstract Class
 * 
 * - saat kita membuat class, kita bisa menjadikan sebuah class sebagai abstract class
 * - abstract class artinya, class tersebut tidak bisa dibuat sebagai object secara langsung
 * hanya bisa diturunkan
 * - untuk membuat class menjadi abstract, kita bisa menggunakan kata kunci abstract sebelum kata kunci class
 * - sehingga abstract class bisa kita gunakan sebagai kontrak child class
 */


 require_once "data/location.php";

 use Data\{Location, City, Province, Country};

 //$location = new Location(); ini error

 $city = new City();
 $province = new Province();
 $country = new Country();