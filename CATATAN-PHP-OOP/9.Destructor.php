<?php

require_once "2.class.php";

/**Destructor
 * 
 * - jika constructor adalah function yang akan dipanggil ketika object dibuat
 * - destructor adalah function yang akan dipanggil ketika object dihapus dari memory
 * - biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati
 * - untuk membuat fn destructor kita menggunakan nama function__destruct()
 * - dan tidak berisi function argument
 * - dalam penggunaan sehari hari, ini misal cocok untuk menutup koneksi ke database
 * atau menutup proses menulis ke file sehingga tidak terjadi memory leak
 * 
 * lanut ke file class
 */

$eko = new Person("eko","subang");
$joko = new Person("Joko","bali");

echo "Program selesai" . PHP_EOL;