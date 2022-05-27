<?php

/**Operator logika
 * 
 * $a && $b     dan         true jika $a dan $b keduanya true
 * $a || $b     atau        true jika salah satu true
 * !$a          not         true jika $a false
 * $a xor $b    xor         true jika jika salah satu true, tapi tidak boleh kedunya
 */

 var_dump(true && true);
 var_dump(true && false);
 var_dump(true || true);
 var_dump(true xor true);
 var_dump(true xor false);
 var_dump(!true);