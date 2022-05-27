<?php

/**PROPERTIES VS CONSTANT
 *
 *  - saat kita membuat object, properties yang terdapat di class akan secara otomatis
 * dibuat per object, oleh karena itu untuk mengakses properties, kita perlu menggunakan
 * object, atau jika dari dalam object tersebut sendiri, kita perlu menggunakan kata kunci this
 * - sedangkan berbeda dengan constant, constant di class tidak akan dibuat per object
 * constant it hidupnya di class, bukan di object, oleh karena itu untuk mengaksesnya kita perlu
 * menggunakan NamaClass::NAMA_CONSTANT
 * - secara sederhana, properties akan dibuat satu per instance class(object), sedangkan constant 
 * dibuat satu per class
 */

 /**self keyword
  * 
  - jika didalam class(misal di function) kita ingin mengakses constant, kita perlu mengakses menggunakan
  NamaClass::NAMA_CONSTANT
  - Namun jika di dalam class yang sama, kita bisa menggunakan kata kunci self untuk mempermudah
  - this pengganti objek, dan self pengganti class

  lanjut di file 2.class
  */