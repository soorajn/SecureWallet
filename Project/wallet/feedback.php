<?php
	include("auth.php");
	include('../db-connect/db2.php');
	$fbk_id=$_GET['fbk_id'];
	 	
	$resultw = $db->prepare("select * from feedback where fbk_id='$fbk_id'");
	$resultw->execute();
	for($i=0; $roww = $resultw->fetch(); $i++)
	{
		$name=$roww['name'];
		$mobileno=$roww['mobileno'];
		$email=$roww['email'];
		$pinno=$roww['pinno'];
		$subj=$roww['subj'];
		$desp=$roww['desp'];
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
                  <h3 class="box-title">Feedback</h3>
                </div>
                
                <div class="box-body no-padding">
   				<form method="post" action="feedback_send.php" autocomplete="off">
				 <div class="box-body well col-lg-6">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <label>Pin No</label>
                        <input type="text" name="pinno" class="form-control" value="<?php echo $pinno;?>" readonly>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $name;?>" readonly>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <label>Contact No</label>
                        <input type="text" name="mobileno" class="form-control" value="<?php echo $mobileno;?>" readonly>
                    </div>
                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $email;?>" readonly>
                    </div>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Subject</label>
                       <input type="text" name="subj" class="form-control" value="<?php echo $subj;?>" readonly>
                    </div>
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Description</label>
                       <input type="text" name="desp" class="form-control" value="<?php echo $desp;?>" readonly>
                    </div>
            	</div>
                <div class="box-body well col-lg-6">			
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Replay</label>
                        <textarea name="replay" rows="7" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12 pull-right">                           
                    	<label>&nbsp;</label>
                     		<input type="submit" value="Search" class="btn btn-block btn-primary">
                    </div>
            	</div>                
                </form>		
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
