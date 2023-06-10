<?php
	include('db-connect/db2.php');

	$ac_account_nopass=md5($_POST["ac_account_nopass"]);
	
	$qry = $db->prepare("SELECT * FROM account WHERE ac_account_nopass='$ac_account_nopass' and ac_stat='Accept'");
	$qry->execute();
	$count = $qry->rowcount();
	if($count > 0) 
	{	
		$row = $qry->fetch();
		$ac_account_no= $row['ac_account_no'];			
		header("location:user_first_image.php?ac_account_no=$ac_account_no");
	}
	else
	{
		header("location:user_account_invalid.php");
	}
?>						
