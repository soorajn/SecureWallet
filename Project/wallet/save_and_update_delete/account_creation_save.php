<?php
include('../../db-connect/db2.php');


	$ac_name=$_POST["ac_name"];
	$ac_age=$_POST["ac_age"];
	$ac_addr= trim($_POST["ac_addr"]);
	$ac_sex =$_POST["ac_sex"];
	$ac_dob =$_POST["ac_dob"];
	$ac_mob =$_POST["ac_mob"];
	$ac_adhar =$_POST["ac_adhar"];
	$ac_email =$_POST["ac_email"];
	$ac_nat =$_POST["ac_nat"];
	$ac_account_no =$_POST["ac_account_no"];
	$n_name =$_POST["n_name"];
	$n_age =$_POST["n_age"];
	$n_sex =$_POST["n_sex"];
	$n_rel =$_POST["n_rel"];
	$n_occ =$_POST["n_occ"];
	$n_adhar =$_POST["n_adhar"];
	$n_mob =$_POST["n_mob"];
	$n_email =$_POST["n_email"];
	$n_addr=$_POST["n_addr"];
	$ac_account_nopass=md5($_POST["ac_account_no"]);
	$ac_stat="Accept";
	
	$image = addslashes(file_get_contents($_FILES['photo1']['tmp_name']));
	$image_name = addslashes($_FILES['photo1']['name']);
	$image_size = getimagesize($_FILES['photo1']['tmp_name']);
	move_uploaded_file($_FILES["photo1"]["tmp_name"], "../../photo/" . $_FILES["photo1"]["name"]);
	$photo1 =$_FILES["photo1"]["name"];
	
	$image = addslashes(file_get_contents($_FILES['photo2']['tmp_name']));
	$image_name = addslashes($_FILES['photo2']['name']);
	$image_size = getimagesize($_FILES['photo2']['tmp_name']);
	move_uploaded_file($_FILES["photo2"]["tmp_name"], "../../photo/" . $_FILES["photo2"]["name"]);
	$photo2 = $_FILES["photo2"]["name"];
	
$sql = "insert into account(ac_name, ac_age, ac_addr, ac_sex, ac_dob, ac_mob, ac_adhar, ac_email, ac_nat, ac_account_no, n_name, n_age, n_sex, n_rel, n_occ, n_adhar, n_mob, n_email, n_addr,photo1,photo2,ac_account_nopass,ac_stat) VALUES ('$ac_name', '$ac_age', '$ac_addr', '$ac_sex', '$ac_dob', '$ac_mob', '$ac_adhar', '$ac_email', '$ac_nat', '$ac_account_no', '$n_name', '$n_age', '$n_sex', '$n_rel', '$n_occ', '$n_adhar', '$n_mob', '$n_email', '$n_addr','$photo1','$photo2','$ac_account_nopass','$ac_stat')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../account_image1.php?account_no=$ac_account_no");

?>						
