<?php

/**operator increment dan decrement
 * 
 * $a++         post increment      Kembalikan $a lalu naikkan 1 angka
 * ++$a         pre increment       naikkan $a satu angka, lalu kembalikan $a
 * $a--         post decrement      kembalikan $a lalu turunkan 1 angka
 * --$a         pre decrement       turunkan 1 angka lalu kembalikan $a
 */

 $a = 10;
 $b = ++$a;

 var_dump($b);
 var_dump($a);