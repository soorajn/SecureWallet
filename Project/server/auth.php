<?php
session_start();
if(!isset($_SESSION['SERVERNAME']) || (trim($_SESSION['SERVERNAME']) == '')) {
	header("location:../");
	exit();
}

?>
