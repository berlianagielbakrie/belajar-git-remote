<?php

/**- fileds/properties/attributes adalah data yang bisa kita sisipkan di dalam object
 * - namun sebelum kita bisa memasukkan data di fields, kita harus mendeklarasikan data
 * apa saja yang dimiliki objek tersebut di dalam deklarasi class-nya
 * - membuat field sama seperti membuat variable, namun ditempatkan di block class
 * dan diawali dengan kata kunci var
 */

 class Orang
 {
     var $name;
     var $address;
     var $country;
 }

 $orang = new Orang(); //object

 /**manipulasi properties
  * 
  - field yang ada di object, bisa kita manipulasi
  - untuk memanipulasi data field, sama seperti variable
  - untuk mengakses field, kita butuh kata kunci -> setelah nama
  object dan diikuti nama fields nya
  */

  $orang->name = "Komang";
  $orang->address = "Bali";
  $orang->country = "Indonesia";

  echo "Name : {$orang->name}".PHP_EOL;
  echo "Address : {$orang->address}".PHP_EOL;
  echo "country : {$orang->country}".PHP_EOL;

  var_dump($orang);


  $orang2 = new Orang();

  $orang->name = "budi";
  $orang->address = "jakarta";
  $orang->country = "Indonesia";

  var_dump($orang2);


  /**Properties type declaration
   * 
   * -kita bisa membuat tpe data declaration
   * - untuk menambahkannya kita bisa tambahkan setelah kata kunci
   * var di properties
   * 
   * contoh : 
   * var string $name;
     var string $address;
     var string $country;


   */

   /** Default Properties Value
    * sama seperti variable, kita juga bisa mengisi langsung valuenya
    * ini mirip seperti default value
    *   var string $name = "komang";
     *var string $address = "doni";
     *var string $country = "indoensia";

     *jadi ketika kita tidak memanggil, maka akan diisi secara 
     *default
     * *

   */

   /**nullable Properties
    * 
    * saaat kita menambah type declaration di properties atau di function argument,
    maka secara otomatis kita tidak bisa mengirim data null ke dalam properties tesebut.
    - ada Nullable type, caranya sebelum type declaration, kita bisa tambahkan tanda?

     *var ?string $name = "komang"; // ini benar
     *var string $address = null; //ini salah
     

    */