<?php
		include("auth.php");
	    include('../db-connect/db2.php');
		$accountno=$_POST['accountno'];
		$result = $db->prepare("select * from deposit where account_no='$accountno'");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++)
		{
			$total=$row['total'];
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
                            	Balance Check
                            </div>
							<div class="panel-body">           
                                    <div class="col-md-6 col-sm-12 col-xs-12 well">
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Check Amount</strong>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Bank Balance Amount</label><br>  
                                            <label><?php echo $total;?></label>
                                        </div>                                       
                                        <div class="col-md-6 col-sm-12 col-xs-12" style="float:right">
                                            <br>
                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                <a href="index.php" class="btn btn-block btn-danger">Back</a>
                                            </div>                                            
                                        </div>
                                    </div>
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
