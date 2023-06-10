<?php
	include('db-connect/db2.php');

	$ac_account_no=$_POST["ac_account_no"];
	$x1=$_POST["x1"];
	$y1=$_POST["y1"];
	//$x2=$_POST["x2"];
	//$y2=$_POST["y2"];
	
	$qry = $db->prepare("SELECT * FROM cuedclick WHERE x1='$x1' and y1='$y1' and accountno='$ac_account_no'");
	$qry->execute();
	$count = $qry->rowcount();
	if($count > 0) 
	{				
		header("location:user_second_image.php?ac_account_no=$ac_account_no");
	}
	else
	{
		header("location:user_account_cordination.php");
	}
?>						
