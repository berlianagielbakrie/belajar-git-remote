<?php


/**recursive function
 * 
 * - recursive function adalah kemampuan function untuk memanggil
 * function dirinya sendiri
 * kadang memang ada banyak problem yang lebih mudah diselesaikan
 * dengan menggunakan recursive function, seperti kasus factorial.
 * 
 * disini kita akan bandingkan factorial dengan
 * loop dan recursive
 */

function factorialloop(int $value) : int
{
    $total = 1;

    for($i = 1; $i <= $value; $i++){
        $total *= $i;
    }

    return $total;
}

var_dump(factorialloop(2));

/**ini contoh menggunakan recursive function
 * 
 */

function factorialrecursive(int $value) : int
{
    if($value == 1){
        return 1;
    }else{
        return $value * factorialrecursive($value - 1);
    }
        
    
}

var_dump(factorialrecursive(5));


/**probelem dengan recursive
 * 
 * - jika recursive terlalu dalam, maka akan ada kemungkinan terjadi memory 
 * overflow, yaitu error dimana memory terlalu banyak digunakan di php
 * - kenapa ini bisa terjadi?
 * - karena kita memanggil fn, php akan menyimpannya didalam stack.
 * jika fn memanggil fn lain maka stack akan menumpuk terus dan jika terlalu 
 * banyak, maka akan membutuhkan konsumsi memory besar, dan jika sudah melewati
 * batas maka akan terjadi error memory.
 * 
 * contoh ketika memanggil jangan menggunakan angka yang besar sampai
 * berjuta juta. 
 * 
 * var_dump(factorialrecursive(3000000));
 * 
 * ini akan menguras memory, dan ketika memory habis maka akan eror.
 */
 