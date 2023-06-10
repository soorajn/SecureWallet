<?php
include('../../db-connect/db2.php');

	$ac_account_no=$_POST["account_no"];
	$x1=$_POST["x1"];
	$y1=$_POST["y1"];
	$x2=$_POST["x2"];
	$y2=$_POST["y2"];


$sql = "update cuedclick set x3='$x1',y3='$y1',x4='$x2',y4='$y2' where accountno='$ac_account_no'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../reset_image_set.php");

?>						
