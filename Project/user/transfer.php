<?php
	include("auth.php");
	include('../db-connect/db2.php');
	$PINNNO=$_SESSION['PINN_NO'];
	 	
		$resultw = $db->prepare("select * from account where ac_account_no='$PINNNO'");
		$resultw->execute();
		for($i=0; $roww = $resultw->fetch(); $i++)
		{
			$accountno=$roww['ac_account_no'];
			$name=$roww["ac_name"];
			$email=$roww["ac_email"];
			$mobileno=$roww["ac_mob"];
		}
				
?>
<!DOCTYPE html>
<html>

<head>

 	<title>Secure Wallet</title>
    <link rel="icon" type="text/css" sizes="16x16" href="../images/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
    <?php
		include('include/css.php');
  	?> 
       
</head>

<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">
    
		<header class="main-header">
			<?php
				include("include/header.php");
			?>
		</header>

		<aside class="main-sidebar">
			<?php
				include("include/leftmenu.php");
			?>
		</aside>

		<div class="content-wrapper">
			<?php
				include("include/topmenu.php");
			?>
		</div>
        
      <div class="row">
        <div class="">
          <div class="">
            <div class="col-xs-12">
            
              <div class="box box-danger">            
                <div class="box-body no-padding">
                	<div class="panel panel-primary">
  							<div class="panel-heading">
                            	Amount Transfer
                            </div>
							<div class="panel-body">           
                                <form method="post" action="transfer_save.php" class="forms" autocomplete="off">    
                                             
                                    <div class="col-md-6 col-sm-12 col-xs-12 well">
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Transfer</strong>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>From Account No</label>
                                             <input type="hidden" name="accountno" value="<?php echo $accountno;?>">
                                             <input type="hidden" name="name" value="<?php echo $name;?>">
                                             <input type="hidden" name="email" value="<?php echo $email;?>">
                                             <input type="hidden" name="mobileno" value="<?php echo $mobileno;?>">
                                            <input type="text"  name="frmpinn" class="form-control" readonly value="<?php echo $PINNNO;?>">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>To Account No</label>
                                             <input type="text"  name="topinn" required class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Amount</label>
                                            <input type="number"  name="amount" class="form-control" required min="0" step="0.01"> 
                                        </div>                                        
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Date</label>
                                            <input type="text"  name="date" class="form-control" value="<?php echo date("Y-m-d");?>" readonly>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12" style="float:right">
                                            <br>
                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                            </div>                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
					</div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
		<?php
  			include("include/footer.php");
		?>
        
		<div class="control-sidebar-bg"></div>
        
		<?php
  			include("include/js.php");
		?>        
	</div>

</body>
</html>
