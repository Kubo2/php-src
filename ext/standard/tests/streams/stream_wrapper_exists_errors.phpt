--TEST--
stream_wrapper_exists(): errors test
--CREDITS--
Kubo2 (+http://twitter.com/Kubo2)
--FILE--
<?php

// var_dump(stream_wrapper_exists('')); 			// non-existent wrapper
var_dump(stream_wrapper_exists()); 				// no arguments

print("\nPassed.");

?>
--EXPECTF--
Warning: stream_wrapper_exists() expects exactly 1 parameter, 0 given in %s on line %d
NULL

Passed.
