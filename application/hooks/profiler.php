<?php 

function profiler_hook()
{
	// daftar user yang dapat melihat profiler
	$whitelist = [
		'127.0.0.1', 	// IPv4 Loopback Address
		'::1'			// IPv6 Loopback Address
	];

	if (in_array($_SERVER['REMOTE_ADDR'], $whitelist))
	{
		$CI =& get_instance();
		$CI->output->enable_profiler(TRUE);
	}
}