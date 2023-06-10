<?php
	include("auth.php");
	include('../db-connect/db2.php');
	
	$ac_age=$_POST["ac_age"];
	$ac_email=$_POST["ac_email"];
	$ac_mob=$_POST["ac_mob"];
	$addr=$_POST["addr"];
	
	$n_age=$_POST["n_age"];
	$n_email=$_POST["n_email"];
	$n_mob=$_POST["n_mob"];
	$n_addr=$_POST["n_addr"];
	
	$accountno=$_POST["accountno"];

	$sql="update account set ac_age='$ac_age',ac_email='$ac_email',ac_mob='$ac_mob',ac_addr='$addr',n_age='$n_age',n_email='$n_email',n_mob='$n_mob',n_addr='$n_addr' where ac_account_no='$accountno'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	header("location:index.php");
		
	
?>
