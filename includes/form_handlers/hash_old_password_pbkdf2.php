<?php
/***
 * This file is for includes/form_handlers/settings_handler.php
 * It is responsible for hashing the password
 * Consider rewrite into a function (possibly private function)
 ***/
	$salt = "ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4";
	$iterations = 100000;
	$length = 32;

	// Generate a random IV using openssl_random_pseudo_bytes()
	// random_bytes() or another suitable source of randomness
	//$salt = openssl_random_pseudo_bytes(16);

	$hash = hash_pbkdf2("sha256", $old_password, $salt, $iterations, $length);
	$old_password = $hash;



	/*
	//Hash Password Function
	private function hash_password($password)
	{
		$salt = "ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4";
		$iterations = 100000;
		$length = 32;

		// Generate a random IV using openssl_random_pseudo_bytes()
		// random_bytes() or another suitable source of randomness
		//$salt = openssl_random_pseudo_bytes(16);

		$hash = hash_pbkdf2("sha256", $password, $salt, $iterations, $length);
		$password = $hash;
		return $password;
	}
	*/
?>