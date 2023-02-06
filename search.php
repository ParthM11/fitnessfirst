<?php
include_once 'db_conn.php';
header('Content-Type: application/json');
$response = array();
if (isset($_GET['sid']))
{
	$qry = "SELECT s.* ,l.*,t.*from student as s inner join location as l on l.locationID = s.locationID inner join studentdetails as sd on sd.stdID = s.stdID inner join time as t on t.timeID = sd.timeID  WHERE s.stdID = '".$_GET['sid']."' ";
	$result = mysqli_query($conn, $qry);  //mysql_query($qry);
	while ($row = mysqli_fetch_array($result)) {
		array_push($response, $row);
    }

	echo json_encode($response);
} 
?>
