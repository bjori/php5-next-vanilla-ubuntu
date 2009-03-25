--TEST--
gmp_xor() basic tests
--FILE--
<?php

var_dump(gmp_strval(gmp_xor("111111", "2222222")));
var_dump(gmp_strval(gmp_xor(123123, 435234)));
var_dump(gmp_strval(gmp_xor(555, "2342341123")));
var_dump(gmp_strval(gmp_xor(-1, 3333)));
var_dump(gmp_strval(gmp_xor(4545, -20)));
var_dump(gmp_strval(gmp_xor("test", "no test")));

$n = gmp_init("987657876543456");
var_dump(gmp_strval(gmp_xor($n, "34332")));
$n1 = gmp_init("987657878765436543456");
var_dump(gmp_strval(gmp_xor($n, $n1)));

var_dump(gmp_xor($n, $n1, 1));
var_dump(gmp_xor(1));
var_dump(gmp_xor(array(), 1));
var_dump(gmp_xor(1, array()));
var_dump(gmp_xor(array(), array()));

echo "Done\n";
?>
--EXPECTF--	
string(7) "2120329"
string(6) "476369"
string(10) "2342340648"
string(5) "-3334"
string(5) "-4563"
string(1) "0"
string(15) "987657876574716"
string(21) "987658017016065701376"

Warning: Wrong parameter count for gmp_xor() in %s on line %d
NULL

Warning: Wrong parameter count for gmp_xor() in %s on line %d
NULL

Warning: gmp_xor(): Unable to convert variable to GMP - wrong type in %s on line %d
bool(false)

Warning: gmp_xor(): Unable to convert variable to GMP - wrong type in %s on line %d
bool(false)

Warning: gmp_xor(): Unable to convert variable to GMP - wrong type in %s on line %d
bool(false)
Done