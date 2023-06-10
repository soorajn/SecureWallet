<?php
include('../../db-connect/db2.php');

	$acc_id=$_POST["acc_id"];
	$ac_age=$_POST["ac_age"];
	$ac_addr= trim($_POST["ac_addr"]);
	$ac_mob =$_POST["ac_mob"];
	$ac_email =$_POST["ac_email"];

	$n_name =$_POST["n_name"];
	$n_age =$_POST["n_age"];
	$n_sex =$_POST["n_sex"];
	$n_rel =$_POST["n_rel"];
	$n_occ =$_POST["n_occ"];
	$n_adhar =$_POST["n_adhar"];
	$n_mob =$_POST["n_mob"];
	$n_email =$_POST["n_email"];
	$n_addr=$_POST["n_addr"];
	
$sql = "update account set ac_age='$ac_age', ac_addr='$ac_addr',ac_mob='$ac_mob', ac_email='$ac_email',n_name='$n_name', n_age='$n_age', n_sex='$n_sex', n_rel='$n_rel',n_occ='$n_occ', n_adhar='$n_adhar', n_mob='$n_mob',n_email='$n_email', n_addr='$n_addr' where account_id='$acc_id'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../account_view.php");

?>						
