<?php

/**Tipe check & Casts
 * 
 * - sebelumnya kita sudah tau cara melakukan konversi tipe data bukan class
 * - khusus untuk tipe data object, kita tidak perlu melakukan konversi secara eksplisit
 * - namun agar aman, sebelum melakukan casts, pastikan kita melakukan type check(pengecekan tipe data) dengan menggunakan kata kunci instanceof
 * - hasil operataor instanceof adalah boolean, true jika tipe data sesuai, false jika tidak sesuai
 * 
 * 
 * lanjut di data/programmer
 */



require_once "data/Programmer.php";



sayHelloProgrammer(new Programmer("Komang"));

sayHelloProgrammer(new BackendProgrammer("doni"));

sayHelloProgrammer(new FrontendProgrammer("kusuma"));