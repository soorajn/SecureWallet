<?php
include('../db-connect/db2.php');

		$otp_id=$_GET["otp_id"];
	
		$sql = "update walletotp set stat='approve' where otp_id='$otp_id'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	
		header("location:request_accept.php");
				
	

?>			
		
