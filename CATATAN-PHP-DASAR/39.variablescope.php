<?php

/**di php kita bisa membuat variable dimana pun
 * 
 * scope variable adalah dibagian mana saja sebuah 
 * variable bisa diakses
 * 
 * php memiliki tiga jenis variable scope
 * 
 * 1. global
 * 2. local
 * 3. static
 * 
 * penjelasan : 
 * 
 * 1. global scope
 * 
 *- variable yang dibuat diluar function memiliki scope global
 - variable di scope gobal hanya bisa diakses dari luar function
 - artinya didalam function, kita tidak bisa mengakses variable 
 di global scope.

 contoh : 

 $globalscope = "nama";

 function scopeglobal()
 {
     echo $globalscope; // nah ini error
 }

 scopeglobal();


  Global keyword
    - jika kita ingin mengakses variable diluar function (global scope)
    dari dalam function, kita bisa menggunakan kata kunci global.
    - dengan menggunakan kata kunci global, maka kita bisa mengakses variabel
    yang ada di global scope dari dalam function.

contoh : 

$globalscope = "nama";

 function scopeglobal()
 {
    global $name;
    echo $globalscope; 

 scopeglobal();

 $ GLOBALs  Variable

 - selain menggunakan global keyword, setiap variable yang dibuat di global scope,
 secara otomatis akan disimpan di dalam array $GLOBAL oleh PHP
 - Jadi kita bisa menggunakan $golbal variable dengan key nama variable nya dari dalam
 function jika kita ingin mengakses global variable
 - $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun

cara memanggil : 
var_dump($GLOBALS);

echo $GLOBALS["namavariable"];


 2. local scope

 -variable yang dibuat didalam function disebut scope local
 - variable di scope local hanya bisa diakses dari dalam function
 itu sendiri
 - artinya variable tersebut tidak bisa diakses dari luar function 
 ataupun function lain. 


 function scopelocal()
 {
     $localscope = "komang";
 }

 scopelocal();
 echo $localscope ;

 ini eror


 3. Static scope

 - secara default local variable itu siklus hidupnya hanya sebatas functionnya
 dieksekusi
 - jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya
 selesai
 - PHP memiliki scope yang bernama static
 - static sope hanya bisa diset ke local variable
 - saat kita membuat sebuah local variable menjadi static, maka siklus hidupya
 tidak akan berhenti ketika sebuah function selesai di eksekusi
 - artinya jika function tersebut di eksekusi lagi, maka static variable tersebut
 akan memiliki value dari sebelumnya
              

function a(){
    static $b = 1;
    echo "static : $b" . PHP_EOL;
    $b++;
}

a();
a();
a();

jika kita tidak memakai static maka hasilnya akan selalu 1
karena variable tersebut diulang kembali. 
 */