<?php

require_once "data/confilct.php";
require_once "data/helper.php";

/**namespace
 * 
 * - saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
 * - jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau
 * mengklasifikasikan jenis jenis class
 * - php memiliki fitur namespace, dimana kita bisa menyimpan class class kita didalam namespace
 * - namespace bisa nested(bisa buat namespace didalam namespae), dan jika kita ingin mengakses class yang terdapat di namespace, 
 * kita perlu menyebutkan nama namespacenya
 * - namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace
 * nama class sama tidak akan menjadikan error di PHP
 * 
 * 
 * //lanjut di data/confilct.php 
 * 
 * --membuat namespace--
 * 
 * - untuk membuat namespace kita bisa menggunakan kata kunci namespace
 * - jika kita ingin membuat sub namespace, kita cukup gunakan karakter
 *  \ setelah namespace sebelumnya.
 * 
 * 
 * -- membuat objek dari namespace
 * 
 * 
 */

 $conflict1 = new Data\one\Conflict();
 $conflict2 = new Data\two\Conflict();


 /** Function dan Constant di Namespace
  * 
  * - selain class, kita juga menggunakan function dan constant di namespace
  * - dan jika kita ingin menggunakan function atau constant tersebut, kita bisa 
  * menggunakannya dengan diawali dengan nama namespacenya

  * lanjut di data/helper 

 */

 //cara mengakses function dan const di namespace

echo Helper\APPLICATION . PHP_EOL;

Helper\Helpme();


/**Global namespace
 * 
 * - secara default saat kita membuat kode di PHP sebenarnya itu disimpan di 
 * global namespace
 * - global namespace adalah namespace yang tidak memiliki nama namespace
 * 
 * namespace {
 * 
 *  
 * 
 * }// ini adalah global namespace
 * 
 * - tapi jika kita tidak membuatnya juga secara default sudah masuk 
 * ke dalam namespace
 */