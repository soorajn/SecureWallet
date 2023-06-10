<?php
include("auth.php");
include('../db-connect/db2.php');

	$accountno=$_POST["accountno"];
	$name=$_POST["name"];
	$mobileno=$_POST["mobileno"];
	$email=$_POST["email"];
	
	$subj=$_POST["subj"];
	$desp=$_POST["desp"];
	$date=date("Y-m-d");
	
		
		$sql = "insert into feedback(pinno,name,mobileno,email,subj,desp,date) VALUES ('$accountno','$name','$mobileno','$email','$subj','$desp','$date')";
		$q1 = $db->prepare($sql);
		$q1->execute();
	
		header("location:feedback_view.php");
				
	

?>			
		
