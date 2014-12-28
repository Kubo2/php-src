--TEST--
stream_wrapper_exists(): basic test
--CREDITS--
Kubo2 (+http://twitter.com/Kubo2)
--FILE--
<?php

var_dump(stream_wrapper_exists('unregistered')); 	// non-existent wrapper
var_dump(stream_wrapper_exists('http')); 			// URL wrapper
var_dump(stream_wrapper_exists('data')); 			// non-URL wrapper

print("\nPassed.");

?>
--EXPECT--
bool(false)
bool(true)
bool(true)

Passed.
