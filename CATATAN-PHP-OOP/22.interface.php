<?php


/**interface
 * 
 * - sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan sebagai kontrak untuk class childnya
 * - namun sebenarnya yang lebih tepat untuk kontrak adalah interface
 * - jangan salah sangka bahwa interface disini bukanlah user interface
 * - interface mirip seperti abstract class, yang membedakan adalah di interface, semua method otomatis abstarct
 * tidak memliki block
 * - di interface kita tidak boleh memiliki properties, kita hanya boleh memiliki constant
 * - untuk mewariskan interface, kita tidak menggunakan kata kunci extends, melaikan implements
 * - dan berbeda dengan class, kita bisa implements lebih dari satu interface
 * 
 * 
 */

 require_once "data/car.php";

 use Data\{Avanza};

 $car = new Avanza();
 $car->drive();