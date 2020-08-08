<?php

if (!function_exists('loggedIn')) {

	function loggedIn() {

		$CI =& get_instance();
		
		$loggedIn = $CI->session->userdata('loggedIn');

		if (isset($loggedIn) || $loggedIn == true) return true;
		else return false;
	}

}

?>