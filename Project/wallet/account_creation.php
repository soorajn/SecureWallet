<?php
	include("auth.php");
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
							Account Creation
                        </div>
							<div class="panel-body">  
                            
<form method="post" action="save_and_update_delete/account_creation_save.php"  autocomplete="off" enctype="multipart/form-data">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Personal Details</strong>
                                        </div>
                                    
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text" name="ac_name" class="form-control"  required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="text" name="ac_age" class="form-control" required min="10" max="70"> 
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                           <textarea rows="6" cols="15" class="form-control" name="ac_addr" required></textarea>
                                          </div>
                                         
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Gender</label>
                                           <select class="form-control" name="ac_sex" required>
                                           	   <option value="">Select</option>
                                               <option value="Female">Female</option>
                                               <option value="Male">Male</option>
                                               <option value="Transgender">Transgender</option>
                                           </select>
                                           </div>
                                          
                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>DOB</label>
                                           <input type="date" name="ac_dob" class="form-control" required max="<?php echo date("Y-m-d");?>">
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Mobile</label>
                                           <input type="text" name="ac_mob" class="form-control" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Aadhar no</label>
                                           <input type="text" name="ac_adhar" class="form-control" required maxlength="12" minlength="12">
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Email Id</label>
                                           <input type="email" name="ac_email" class="form-control" required>
                                          </div>
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Nationality</label>
                                           <input type="text" name="ac_nat" class="form-control"  required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                            <label>Photo One</label>
                                            <input type="file"  name="photo1" class="form-control" required>
                                          </div>
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label>Photo Two</label>
                                                <input type="file"  name="photo2" class="form-control" required>
                                           </div>
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Account No</label>
                            <input type="text" name="ac_account_no" class="form-control" value="<?php echo "SBI".rand(100000000001,1);?>" readonly>
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
                                               <input  type="text" name="n_name"   class="form-control"  required pattern="[a-zA-Z1 _]{3,50}">
                                        </div> 
                                        
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Age</label>
                                           <input type="text" name="n_age" class="form-control" required min="13" max="70"> 
                                          </div>
                                          
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Gender</label>
                                           <select class="form-control" name="n_sex" required>
                                           	   <option value="">Select</option>
                                               <option value="Female">Female</option>
                                               <option value="Male">Male</option>
                                               <option value="Transgender">Transgender</option>
                                           </select>
                                           </div>
                                         
                                         
                                        
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Relation</label>
                                           <input type="text" name="n_rel" class="form-control"  required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Occupation</label>
                                           <input type="text" name="n_occ" class="form-control"  required pattern="[a-zA-Z1 _]{3,50}">
                                          </div>
                                          
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Aadhar no</label>
                                           <input type="text" name="n_adhar" class="form-control" required  maxlength="12" minlength="12">
                                          </div>
                                         
                                          	
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Mobile</label>
                                           <input type="text" name="n_mob" class="form-control" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                                          </div>
                                          
                                          
                                           <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Email</label>
                                           <input type="email" name="n_email" class="form-control" required>
                                          </div>
                                          
                                           <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                               <textarea  name="n_addr"   class="form-control" rows="4"  cols="15" required></textarea>
                                           </div> 
                                           

                                     </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                            
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Submit" class="btn btn-block btn-primary" id="save1">
                            	 </div>
                                 
                            	 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="reset" value="Reset" class="btn btn-block btn-danger" id="cls1">
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
