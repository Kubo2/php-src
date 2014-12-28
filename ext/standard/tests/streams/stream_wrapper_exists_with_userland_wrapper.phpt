--TEST--
stream_wrapper_exists(): user-registered wrapper test
--CREDITS--
Kubo2 (+http://twitter.com/Kubo2)
--FILE--
<?php

// our userland wrapper class
require __DIR__ . '/Userland_Wrapper.inc';

// register the wrapper
if(!Userland_Wrapper::registerWrapper()) {
	echo('Failure: Not possible to register userland wrapper protocol.');
	exit(1);
}

// test for stream_wrapper_exists()
printf('Whether %s:// is registered wrapper: ', Userland_Wrapper::WRAPPER_NAME);
var_dump(stream_wrapper_exists(Userland_Wrapper::WRAPPER_NAME));

?>
--EXPECTF--
Whether %s:// is registered wrapper: bool(true)
