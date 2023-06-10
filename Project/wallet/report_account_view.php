<?php
	include("auth.php");
    include('../db-connect/db2.php');
    $acc_id=$_GET["acc_id"];
	$result = $db->prepare("select * from  account where account_id='$acc_id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{	
		$ac_name=$row["ac_name"];
		$ac_age=$row["ac_age"];
		$ac_addr=$row["ac_addr"];
		$ac_sex =$row["ac_sex"];
		$ac_dob =$row["ac_dob"];
		$ac_mob =$row["ac_mob"];
		$ac_adhar =$row["ac_adhar"];
		$ac_email =$row["ac_email"];
		$ac_nat =$row["ac_nat"];
		$ac_account_no =$row["ac_account_no"];
		$n_name =$row["n_name"];
		$n_age =$row["n_age"];
		$n_sex =$row["n_sex"];
		$n_rel =$row["n_rel"];
		$n_occ =$row["n_occ"];
		$n_adhar =$row["n_adhar"];
		$n_mob =$row["n_mob"];
		$n_email =$row["n_email"];
		$n_addr=$row["n_addr"];
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
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">
                <div class="box-body no-padding">
                	<div class="panel panel-primary">
  					  <div class="panel-heading ">
							Accounts Information
                        </div>
							<div class="panel-body">  
                            
                            <form autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Personal Details</strong>
                                        </div>
                                    
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text" name="ac_name" class="form-control" value="<?php echo $ac_name;?>" readonly>
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="text" name="ac_age" class="form-control" value="<?php echo $ac_age;?>" readonly>
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                           <input type="text" name="ac_addr" class="form-control" value="<?php echo $ac_addr;?>" readonly>
                                          </div>
                                         
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Gender</label>
                                         	<input type="text" name="ac_sex" class="form-control" value="<?php echo $ac_sex;?>" readonly>
                                           </div>
                                          
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>DOB</label>
                                           <input type="text" name="ac_dob" class="form-control" value="<?php echo $ac_dob;?>" readonly>
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Mobile</label>
                                           <input type="text" name="ac_mob" class="form-control" value="<?php echo $ac_mob;?>" readonly>
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Aadhar no</label>
                                           <input type="text" name="ac_adhar" class="form-control" value="<?php echo $ac_adhar;?>" readonly>
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Email Id</label>
                                           <input type="email" name="ac_email" class="form-control" value="<?php echo $ac_email;?>" readonly>
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Nationality</label>
                                           <input type="text" name="ac_nat" class="form-control" value="<?php echo $ac_nat;?>" readonly>
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Account No</label>
				                        <input type="text" name="ac_account_no" class="form-control" value="<?php echo $ac_account_no;?>" readonly>
                                          </div>
                                          
                                        </div> 
                                  </div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                 <div class="row">
                                      	<div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                            <strong>Nominee Details</strong>
                                        </div>
                                         <div class="col-md-6 col-sm-6 col-xs-6">
                                           <label>Name</label>
                                               <input  type="text" name="n_name" class="form-control" value="<?php echo $n_name;?>" readonly>
                                        </div> 
                                        
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="text" name="n_age" class="form-control" value="<?php echo $n_age;?>" readonly>
                                          </div>
                                          
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Gender</label>
                                          	<input type="text" name="ac_sex" class="form-control" value="<?php echo $ac_sex;?>" readonly>
                                           </div>
                                         
                                         
                                        
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Relation</label>
                                           <input type="text" name="n_rel" class="form-control" value="<?php echo $n_rel;?>" readonly>
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Occupation</label>
                                           <input type="text" name="n_occ" class="form-control" value="<?php echo $n_occ;?>" readonly>
                                          </div>
                                          
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Aadhar no</label>
                                           <input type="text" name="n_adhar" class="form-control" value="<?php echo $n_adhar;?>" readonly>
                                          </div>
                                         
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Mobile</label>
                                           <input type="text" name="n_mob" class="form-control" value="<?php echo $n_mob;?>" readonly>
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Email</label>
                                           <input type="email" name="n_email" class="form-control" value="<?php echo $n_email;?>"  readonly>
                                          </div>
                                          
                                           <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                              <input type="text" name="n_addr" class="form-control" value="<?php echo $n_addr;?>" readonly>
                                           </div> 
                                           

                                     </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12" style="float:right">
                            
                                 <div class="col-md-12 col-sm-6 col-xs-12">
                                 <a href="report_account.php" class="btn btn-block btn-primary">Back</a>
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
</div>
<?php
  include("include/js.php");
?>
</body>
</html>
