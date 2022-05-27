<?php

$nama = "Komang";
$nama = null;

$umur = null;

echo $nama;
echo $umur;

/** Mengecek apakah data null
 * menggunakan is_null atau isset
*/

var_dump( is_null($nama));
echo "\n";
var_dump(is_null($umur));

echo "\n";
var_dump(isset($nama));

/**Menghapus variable
 * menggunakan unset
*/

$hapus = "Menghapus";
unset($hapus);



