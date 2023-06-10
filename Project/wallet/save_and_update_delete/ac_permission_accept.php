<?php
include('../../db-connect/db2.php');
	
	$ac_account_no=$_GET["ac_account_no"];

	$sql="update account set ac_stat='Accept' where ac_account_no='$ac_account_no'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	header("location:../account_permission.php");
		
	
?>