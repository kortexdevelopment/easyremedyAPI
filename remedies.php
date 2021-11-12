<?php
	
	header('Cache-control: no-cache, must-revalidate');
	header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
	
	require_once $_SERVER["DOCUMENT_ROOT"] . "/api/db.php";
	
	$remedies = array();
	
	$obj;
    $jsnObj;
	
	$sql = "SELECT * FROM remedies";
	
	$query_result = $db_conn->query($sql);

	while($result = $query_result->fetch_array(MYSQLI_NUM)):
		$remedies[] = $result;
		endwhile;
	
	$query_result->free_result();
	
	mysqli_close($db_conn);

	$obj->remedies = $remedies;
	$jsnObj = json_encode($obj);
	echo($jsnObj);
	exit();
?>