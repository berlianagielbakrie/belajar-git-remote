<?php

/**Operator perbandingan
 * 
 * $a==$b       sama dengan             true jika $a sama dengan $b walaupun beda tipe data
 * $a===$b      identik                 true jika keduanya identik
 * $a!=$b       tidak sama dengan       true jika $a tidak sama dengan $b walaupun beda tipe data
 * $a!==!$b     tidak identik           true jika keduanya tidak identik
 * $a<$b        kurang dari             true jika a < b
 * $a<=$b       kurang dari sama dengan  true jika a < b atau a = b
 * $a>$b        lebih dari                 true jika a>b
 * $a>=$b       lebih dari sama dengan      true jika a > b atau a = b
 */

 var_dump("10" == 10);
 var_dump("10"===10);

 var_dump(10 < 9);
 var_dump(10 >= 10);
 