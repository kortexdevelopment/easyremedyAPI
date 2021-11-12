<?php
	
	header('Cache-control: no-cache, must-revalidate');
	header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
	
	require_once $_SERVER["DOCUMENT_ROOT"] . "/api/db.php";
	
    $login = array();
	$email = $_GET['email'];
	$pass = $_GET['pass'];
	$obj;
    $jsnObj;
	
	$sql = "SELECT * FROM users WHERE email = '{$email}' AND pass = '{$pass}'";
	
	$query_result = $db_conn->query($sql);

	$login = $query_result->fetch_array(MYSQLI_NUM);
	
	$query_result->free_result();

	mysqli_close($db_conn);
	
    if(is_null($login)){
        $login = array();
    }
    
    $obj->login = $login;

	$jsnObj = json_encode($obj);
	echo($jsnObj);
	exit();
?>