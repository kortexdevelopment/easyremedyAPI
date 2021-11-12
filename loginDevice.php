<?php
	
	header('Cache-control: no-cache, must-revalidate');
	header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
	
	require_once $_SERVER["DOCUMENT_ROOT"] . "/api/db.php";
	
	$id = $_GET['id'];

	$obj;
    $jsnObj;
	
	$sql = "UPDATE users SET loged = 1 WHERE id = ? AND loged = 0";
	
	if($stm = $db_conn->prepare($sql))
    {
        $stm->bind_param("i", $id);

        if($stm->execute())
        {
            $obj->succes = TRUE;
        }
        else
        {
            $obj->succes = FALSE;
        }
    }

    $stm->close();
	mysqli_close($db_conn);
	$jsnObj = json_encode($obj);
	echo($jsnObj);
	exit();
?>