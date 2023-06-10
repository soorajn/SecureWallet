<?php
	include('db-connect/db2.php');

	$ac_account_no=$_POST["ac_account_no"];
	$x1=$_POST["x1"];
	$y1=$_POST["y1"];
	//$x2=$_POST["x2"];
	//$y2=$_POST["y2"];
	
	$result = $db->prepare("select * from account where ac_account_no='$ac_account_no'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row['ac_name'];
		$mobileno=$row['ac_mob'];
		$email=$row['ac_email'];
		$accountno=$row['ac_account_no'];
	}
	$stat="Pending";
	$otp=rand(4497964,0);
	$date=date("Y-m-d");
	
	$tm=date("h:i:s A");
	
	$qry = $db->prepare("SELECT * FROM cuedclick WHERE x3='$x1' and y3='$y1' and accountno='$ac_account_no'");
	$qry->execute();
	$count = $qry->rowcount();
	if($count > 0) 
	{			
	$sql = "insert into walletotp(name,mobileno,email,accountno,date,stat,otp,tm) VALUES ('$name','$mobileno','$email','$accountno','$date','$stat','$otp','$tm')";
		$q1 = $db->prepare($sql);
		$q1->execute();	
		header("location:user_third_otp.php?ac_account_no=$ac_account_no");
	}
	else
	{
		header("location:index.php");
	}
?>						
