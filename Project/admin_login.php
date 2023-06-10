<?php
	session_start();
	include('db-connect/db2.php');

	$username=$_POST["username"];
	$password=$_POST["password"];	
	$qry = $db->prepare("select * from admin where username='$username' and password='$password'");
	$qry->execute();
	$count = $qry->rowcount();
	if($count > 0) 
	{		
	 	//Login Successful
		session_regenerate_id();
		$rows = $qry->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rows['Log_Id'];
		session_write_close();
		header("location: wallet/index.php");
		exit();
	}
	else
	{
		echo "<script>alert('Check Username And Password Try Again.'); window.location='index.php'</script>";
		exit();
	}
?>						
