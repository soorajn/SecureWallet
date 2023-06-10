<?php
	include("auth.php");
	include('../db-connect/db2.php');
	$SERVERNAME=$_SESSION['SERVERNAME'];
	 	
		$resultw = $db->prepare("select * from server where username='$SERVERNAME'");
		$resultw->execute();
		for($i=0; $roww = $resultw->fetch(); $i++)
		{
			$username=$roww['username'];
			$password=$roww['password'];
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
                            	Password Change
                            </div>
							<div class="panel-body">           
                                <form method="post" action="password_update.php" class="forms" autocomplete="off">                 
                                    <div class="col-md-6 col-sm-12 col-xs-12 well">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Old Password</label>
                                             <input type="hidden"  name="username"value="<?php echo $username?>">
                                      <input type="password"  name="oldpass" required class="form-control" readonly value="<?php echo $password?>">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>New Password</label>
                                            <input type="password"  name="newpass" required class="form-control" >
                                        </div>                                        
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Date</label>
                                            <input type="text"  name="pass2" class="form-control" value="<?php echo date("Y-m-d");?>" readonly>
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
