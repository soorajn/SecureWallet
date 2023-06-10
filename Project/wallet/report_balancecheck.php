<?php
	include("auth.php");
	include('../db-connect/db2.php');
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
		include("include/css.php");
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
        <div class="col-md-12 col-sm-6 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Balance Check</h3>
                </div>
                
                <div class="box-body no-padding">
				 <div class="box-body">
				<form method="post" action="report_balancecheck_view.php" autocomplete="off">
                		
                		<div class="col-md-3 col-sm-12 col-xs-12">
                            <label>Account No</label>
                            <input list="account" placeholder="Search" required class="form-control" name="accountno">
                                <datalist id="account">
                                    <option value="">Select</option>
                                       <?php
                                        $result = $db->prepare("SELECT distinct(ac_account_no) FROM account");
                                        $result->execute();
                                        $row_count =  $result->rowcount();
                                        for($i=0; $rows = $result->fetch(); $i++)
                                        {
                                        echo '<option>'.$rows['ac_account_no'].'</option>';
                                        }
                                    ?>								
                                </datalist>
                        </div>                        
                         <div class="col-md-2 col-sm-6 col-xs-12">                           
                           	<label>&nbsp;</label>
                            <input type="submit" value="Search" class="btn btn-block btn-primary">
                        </div>

                        
                </form>		  		
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
	</div>

	<?php
		include("include/js.php");
	?>
	</div>
</body>
</html>
