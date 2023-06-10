<?php
include('../../db-connect/db2.php');

	$accountno=$_POST["accountno"];
	$amount=$_POST["amount"];
	$date =$_POST["date"];
	
	$result = $db->prepare("select * from  account where ac_account_no='$accountno'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{	
		$ac_name=$row["ac_name"];
		$ac_mob=$row["ac_mob"];
		$ac_email=$row["ac_email"];
	}
	
	$result = $db->prepare("select * from  deposit where account_no='$accountno'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{	
		$total=$row["total"];	
	}
	
	$got=$total+$amount;
$sql = "insert into deposit(account_no,name,contactno,email,amount,total,date) VALUES ('$accountno','$ac_name','$ac_mob','$ac_email','$amount','$got','$date')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../deposit_view.php");

?>						
