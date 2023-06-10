<?php
session_start();
if(!isset($_SESSION['PINN_NO']) || (trim($_SESSION['PINN_NO']) == '')) {
	header("location:../");
	exit();
}

?>

