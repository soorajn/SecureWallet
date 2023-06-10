<?php
include('../db-connect/db2.php');

	$pinno=$_POST["pinno"];
	$replay=$_POST["replay"];
	
		$sql = "update feedback set replay='$replay' where pinno='$pinno'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	
		header("location:feedback_view.php");
				
	

?>					
