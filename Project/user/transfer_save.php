<?php
include("auth.php");
include('../db-connect/db2.php');

	$topinn=$_POST["topinn"];
	$frmpinn=$_POST["frmpinn"];
	$amount=$_POST["amount"];
	$date=$_POST["date"];
	
	$accountno=$_POST["accountno"];
	$name=$_POST["name"];
	$email=$_POST["email"];
	$mobileno=$_POST["mobileno"];

	$qry = $db->prepare("SELECT * FROM account WHERE ac_account_no='$topinn'");
	$qry->execute();
	$count = $qry->rowcount();
	if($count > 0) 
	{
		
		
		$qryc = $db->prepare("SELECT * FROM deposit WHERE total<='$amount' and account_no='$frmpinn' order by dep_id desc limit 1");
		$qryc->execute();
		$countc = $qryc->rowcount();
		if($countc > 0) 
		{			
		
			header("location:transfer_save_invalid.php");
		}
		else
		{
			$resultf = $db->prepare("select * from  deposit where account_no='$frmpinn'");
			$resultf->execute();
			for($i=0; $rowf = $resultf->fetch(); $i++)
			{	
				$totalf=$rowf["total"];	
			}
			$gotf=$totalf-$amount;
			
			$resultn = $db->prepare("select * from  account where ac_account_no='$topinn'");
			$resultn->execute();
			for($i=0; $rown = $resultn->fetch(); $i++)
			{	
				$account_not=$rown["ac_account_no"];
				$namet=$rown["ac_name"];
				$contactnot=$rown["ac_mob"];
				$emailt=$rown["ac_email"];	
				
			}
				
			$resultt = $db->prepare("select * from  deposit where account_no='$topinn'");
			$resultt->execute();
			for($i=0; $rowt = $resultt->fetch(); $i++)
			{	
				$totalt=$rowt["total"];	
			}
			$gott=$totalt+$amount;
					
		
		$sql = "insert into deposit(account_no,name,contactno,email,amount,total,date) VALUES ('$frmpinn','$name','$mobileno','$email','$amount','$gotf','$date')";
		$q1 = $db->prepare($sql);
		$q1->execute();
		
		$sql = "insert into deposit(account_no,name,contactno,email,amount,total,date) VALUES ('$topinn','$namet','$contactnot','$emailt','$amount','$gott','$date')";
		$q1 = $db->prepare($sql);
		$q1->execute();
		
		
		$sql = "insert into transfer(account_no,name,contactno,email,frmpinn,topinn,amount,date) VALUES ('$account_not','$namet','$contactnot','$emailt','$frmpinn','$topinn','$amount','$date')";
		$q1 = $db->prepare($sql);
		$q1->execute();
			
		header("location:index.php");	
		
		}				
				
	}
	else
	{
		header("location:transfer_save_invalid.php");
	}

?>					

