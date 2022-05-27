<?php

/**operator penugasan aritmatika 
 * $a += $b         $a = $a+$b
 * $a -= $b         $a = $a-$b
 * $a *= $b         $a = $a*$b
 * $a /= $b         $a = $a/$b
 * $a %= $b         $a = $a%$b
 */

 $total = 0;

 $makan = 10000;
 $minum = 5000;
 $cemilan = 1000;

 $total += $makan;
 $total += $minum;
 $total += $cemilan;

 var_dump($total);