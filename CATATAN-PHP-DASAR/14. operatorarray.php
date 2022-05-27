<?php

/**operator array
 * 
 * $a+$b        union       menggabungkan array $a dan $b
 * $a == $b     equality    true jika $a dan $b memiliki key-value sama
 * $a ===$b     identity    true jika $a dan $b memiliki key-value dan posisi sama
 * $a != $b     inequality  true jika $a dan $b tidak sama
 * $a !== $b    nonidentity true jika $a dan $b tidak identik
 */

 $first = [
     "Nama" => "Komang Doni"
 ];

 $last = [
     "Nama" => "berlian agiel",
     "umur" => 18
 ];

 $full = $first + $last;

 var_dump($full);

 $half = $last + $first;
 var_dump($half);

 $a = [
     "Nama" => "Komang",
     "umur" => 19
 ];

 $b = [
    "umur" => 19,
    "nama" => "Komang"
     
 ];

var_dump($a!=$b); /**true jika sama persis walau beda tempat */
var_dump($a!==$b);/**ture jika sama persis dan sama tempat */