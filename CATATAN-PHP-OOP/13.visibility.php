<?php

require_once "data/product.php";

/**visibility / acces modifier
 * 
 * - adalah kemampuan properties, function dan constant dapat diakses dari mana saja
 * - secara default, properties, function dan constant yang kita buat di dalam class bisa
 * diakses dari mana saja, atau artinya dia bersifat public
 * - selain public, masih ada beberapa visibility lainnya
 * - secara default kunci var untuk properties sifatnya public.
 * 
 * ada 3 jenis visibility : 
 * 
 * jenis                class           subclass            world
 * 
 * 1. public              YES               YES                 YES
 * 2. Protected           YES               YES                 NO
 * 3. Private             YES               NO                  NO
 * 
 * lanjut di data/product.php
 * 
 * 
 */

 $product = new Product("apel",20000);

 //echo $product->name . PHP_EOL;  // ini error karena acces nya private

 // cara mengambil data yang benar

 echo $product->getName() . PHP_EOL;
 echo $product->getPrice() . PHP_EOL;
