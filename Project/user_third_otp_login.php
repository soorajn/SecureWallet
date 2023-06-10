<?php
	session_start();
	include('db-connect/db2.php');

	$otp=$_POST["otp"];
	
	$result = $db->prepare("select * from walletotp where otp='$otp'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row['name'];
		$mobileno=$row['mobileno'];
		$email=$row['email'];
		$ac_account_no=$row['accountno'];
		
		$date=$row['date'];
		$stat=$row['stat'];
		$otp=$row['otp'];
		$tm=$row['tm'];
	}
	

	
	$qry = $db->prepare("SELECT * FROM walletotp WHERE otp='$otp' and stat='approve'");
	$qry->execute();
	$count = $qry->rowcount();
	if($count > 0) 
	{		
		$_SESSION['PINN_NO'] = $ac_account_no;
		
		$sql = "delete from walletotp where accountno='$ac_account_no'";
		$q1 = $db->prepare($sql);
		$q1->execute();
		
		$sql = "insert into walletotpchk(name,mobileno,email,accountno,date,stat,otp,tm) VALUES ('$name','$mobileno','$email','$ac_account_no','$date','$stat','$otp','$tm')";
		$q1 = $db->prepare($sql);
		$q1->execute();	
		header("location:user/index.php");
	}
	else
	{
		echo "<script>alert('Check O T P'); window.location='user_third_otp.php'</script>";
		exit();
	}
?>						
