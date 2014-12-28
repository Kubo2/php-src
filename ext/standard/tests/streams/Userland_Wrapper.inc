<?php

/**
 * Represents custom user-defined wrapper protocol interface,
 * useful for testing (* not only) stream_wrapper_* functions
 *
 * @author   Kubo2
 */
final class Userland_Wrapper {
	/** @var string */
	const WRAPPER_NAME = 'uw';

	/**
	 * Represents all possible methods that are defined in streamWrapper prototype
	 * 
	 * @param string   method name
	 * @param array   an array of its actual arguments
	 * @return void
	 */
	public function __call($name, $arguments) {
		printf("Called %s::%s()\n", get_class($this), $name);
		call_user_func_array('var_dump', $arguments);
	}

	/**
	 * Registers custom wrapper for testing.
	 * 
	 * @return bool
	 */
	public static function registerWrapper() {
		@ stream_wrapper_unregister( self::WRAPPER_NAME );
		return stream_wrapper_register(self::WRAPPER_NAME, __CLASS__);
	}
}
