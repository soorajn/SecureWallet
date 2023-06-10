<?php
include('../../db-connect/db2.php');

	$ac_account_no=$_POST["account_no"];
	$x1=$_POST["x1"];
	$y1=$_POST["y1"];
	$x2=$_POST["x2"];
	$y2=$_POST["y2"];


$sql = "update cuedclick set x1='$x1',y1='$y1',x2='$x2',y2='$y2' where accountno='$ac_account_no'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../reset_image2.php?account_no=$ac_account_no");

?>						
