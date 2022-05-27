<?php

$values = array(1, 2, 3, 4);
var_dump($values);

$anggota = ["komang","doni","kusuma"];
var_dump($anggota);

/**Operasi Array
 * $array[index]             : mengakses data di array pada nomor index
 * $array[index] = value     : mengubah data di array pada nomor index dengan value baru
 * $array[] = value         : menambah data di array pada posisi paling belakang
 * unset($array[index])     : menghapus data di array, index otomatis hilang dari array
 * count($array)            : mengambil total data di array0
 */

var_dump($anggota[1]);
/**mengakses data */

$anggota[0] = "berlian";
var_dump($anggota);
/**mengubah data */

$anggota[] = "agiel";
var_dump($anggota);
/**menambahkan data */

unset($anggota[3]);
var_dump($anggota);
/**menghapus data ke */

var_dump(count($anggota));
/**menghitung jumlah data */