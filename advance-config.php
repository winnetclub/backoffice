<?php
 

/** Application Domain name */
define('APP_DOMAIN',  $_SERVER['HTTP_HOST']  );

/** Absolute path to the   directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) );
 


$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
 
define('GETIP', $ip);

define('ADMINPATH', "http://backoffice.winnetclub.ec/admin123/"  );

include_once ABSPATH."/lib/ip_info.php";
 
define("LOCATION",get_address($ip));
?>