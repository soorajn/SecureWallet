<?php
include('../db-connect/db2.php');

	$username=$_POST["username"];
	$newpass=$_POST["newpass"];
	
		$sql = "update server set password='$newpass' where username='$username'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	
		header("location:index.php");
				
	

?>					
