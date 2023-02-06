<?php 
	include_once 'db_conn.php';
	if(isset($_GET['id']) && isset($_GET['type']))
	{
		$diff =  stripos("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]","&") - stripos("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]","=");
		$typeDecrypt =  substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",stripos("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]","="),$diff);
		$typeReady = ltrim($typeDecrypt, '=');
		$id = getSafeValue($conn,decrypt($_GET['id']));
		$type = decrypt($typeReady);
		$tblID="";
		switch ($type) {
			case 'user':
					$tblID = "userID";
					$url = "user.php";
				break;

			case 'product':
					$tblID = "prodID";
					$url = "listproduct.php";
				break;
			
			case 'student':
					$tblID = "stdID";
					$url = "inquiry.php";
				break;
			
			default:
				// code...
				break;
		}
		$deleteSql = "DELETE from $type where $tblID = $id ";
		if(mysqli_query($conn,$deleteSql))
		{
			header("Location: $url");
		}
		

	}
?>