<?php

/**encapsulation
 * 
 * - encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar
 * - hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik dan valid
 * - untuk mencapai ini, biasanya kita akan membuat semua properties menggunakan access modifier private,
 * sehingga tidak bisa diakses atau diubah dari luar
 * - agar bisa diubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties tersebut
 * - ini dinamakan getter dan setter
 * 
 * 
 * 
 *          getter dan setter
 * 
 * - di PHP, proses encapsulation sudah dibuat standarisasinya, dimana kita bisa menggunakan getter
 * dan setter method
 * - getter adalah function yang dibuat untuk mengambil data field
 * - setter ada function untuk mengubah data field
 * 
 * tipe data                getter method           setter method
 * 
 * boolean                  isXxx(): bool           setXxx(bool value)
 * 
 * lainnya                  getXxx() : tipeData     setXxx(tipeData value)
 * 
 * 
 * 
 * 
 * 
 */

 require_once "data/category.php";


$category = new Category();                 //membuat objek
$category->setName("Handphone");            //mengubah setter
$category->setExpensive(true);              //mengubah setter

echo "Name : {$category->getName()}" . PHP_EOL; //mengambil data
echo "Expensive : {$category->isExpensive()}" . PHP_EOL; //mengambil data





 
