<?php

/**ternary operator
 * 
 * - kadang kita ada kasus dimana butuh melakukan pengecekan kondisi
 * menggunakan if statement, lalu jika benar kita ingin memberi nilai
 * pada variable dengan x dan jika salah dengan y
 * 
 * - bisa dipersingkat dengan ternary operator
 * 
 */

/**contoh dalam if */

$gender = "wanita";
$hi = null;

if($gender == "PRIA"){
    $hi = "hi bro";
}else{
    $hi = "hi nona";
}

echo $hi . PHP_EOL;

/** dalam ternary operator */

$jeniskelamin = "PRIA";

$hai = $jeniskelamin =="PRIA"? "Hi bro" : "hi nona";

echo $hai . PHP_EOL;