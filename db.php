<?php
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'copenlabscom_aplications');
	define('DB_PASSWORD', 'rootaplications');
	define('DB_NAME', 'copenlabscom_easyremedy');

	$db_conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if($db_conn === false)
	{
		die("ERROR: Connection failed. " . $db_conn->connect_error);
	}
?>