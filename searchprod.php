<?php
include_once 'db_conn.php';
header('Content-Type: application/json');
$response = array();
if (isset($_GET['sid']))
{
	$qry = "SELECT * from product where prodID = '".$_GET['sid']."' ";
	$result = mysqli_query($conn, $qry);  //mysql_query($qry);
	while ($row = mysqli_fetch_array($result)) {
		array_push($response, $row);
    }

	echo json_encode($response);
} 
?>
