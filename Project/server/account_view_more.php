<?php
	include("auth.php");
	include('../db-connect/db2.php');
	$account_id=$_GET["account_id"];
	 			
		$resulta = $db->prepare("select * from account where account_id='$account_id'");
		$resulta->execute();
		for($i=0; $rowa = $resulta->fetch(); $i++)
		{
			$ac_name=$rowa['ac_name'];
			$ac_age=$rowa['ac_age'];
			$ac_email=$rowa['ac_email'];
			$ac_sex=$rowa['ac_sex'];
			$ac_mob=$rowa['ac_mob'];
			$ac_adhar=$rowa['ac_adhar'];
			$ac_addr=$rowa['ac_addr'];
			$ac_account_no=$rowa['ac_account_no'];
			
			
			$n_name=$rowa['n_name'];
			$n_age=$rowa['n_age'];
			$n_email=$rowa['n_email'];
			$n_sex=$rowa['n_sex'];
			$n_mob=$rowa['n_mob'];
			$n_adhar=$rowa['n_adhar'];
			$n_addr=$rowa['n_addr'];
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
                            Accounts Information
                            </div>
							<div class="panel-body">                            
                            
                            	<!-- Section Start -->
                               	<form autocomplete="off">
                                	<div class="col-md-6 col-sm-12 col-xs-12 well">   
                                    	<div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Accounts Information</strong>
                                        </div>                                    
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Name</label>
                                            <input type="text"  name="ac_name"  class="form-control" value="<?php echo $ac_name;?>" readonly>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Age</label>
                                            <input type="number"  name="ac_age" class="form-control" value="<?php echo $ac_age;?>" readonly>
                                        </div>  
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Email</label>
                                            <input type="email"  name="ac_email" class="form-control" value="<?php echo $ac_email;?>" readonly>
                                        </div>  
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Sex</label>
                                            <input type="text"  name="ac_sex" class="form-control" value="<?php echo $ac_sex;?>" readonly>
                                        </div>  
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Aadhar No</label>
                                            <input type="text"  name="ac_adhar" class="form-control" value="<?php echo $ac_adhar;?>" readonly>
                                        </div>                                          
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Contact No</label>
                                            <input type="text"  name="ac_mob" class="form-control" value="<?php echo $ac_mob;?>" readonly>
                                        </div>  
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Account No</label>
                                           <input type="text" name="accountno" class="form-control" value="<?php echo $ac_account_no;?>" readonly>
                                        </div> 
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Address</label>
                                           <input type="text" name="addr" class="form-control" value="<?php echo $ac_addr;?>" readonly>
                                        </div>                                                                                 
	                                </div>                                    
                                    <div class="col-md-6 col-sm-12 col-xs-12 well">  
                                    	<div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Nomini Information</strong>
                                        </div>                                       
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Name</label>
                                            <input type="text"  name="n_name"  class="form-control" value="<?php echo $n_name;?>" readonly>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Age</label>
                                            <input type="number"  name="n_age" class="form-control" value="<?php echo $n_age;?>" readonly>
                                        </div>  
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Email</label>
                                            <input type="email"  name="n_email" class="form-control" value="<?php echo $n_email;?>" readonly>
                                        </div>  
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Sex</label>
                                            <input type="text"  name="n_sex" class="form-control" value="<?php echo $n_sex;?>" readonly>
                                        </div>  
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Aadhar No</label>
                                            <input type="text"  name="n_adhar" class="form-control" value="<?php echo $n_adhar;?>" readonly>
                                        </div>                                          
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Contact No</label>
                                            <input type="text"  name="n_mob" class="form-control" value="<?php echo $n_mob;?>" readonly>
                                        </div>  
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Address</label>
                                           <input type="text" name="n_addr" class="form-control" value="<?php echo $n_addr;?>" readonly>
                                        </div> 
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Date</label>
                                           <input type="text" name="date" class="form-control" value="<?php echo date("Y-m-d");?>" readonly>
                                        </div>   
                                         <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                                             <label>&nbsp;</label>
                                           <a href="account_view.php" class="btn btn-block btn-primary">Back</a>
                                        </div>                                           
	                                </div>
                                 </form>           
      							<!-- Section Start -->
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
