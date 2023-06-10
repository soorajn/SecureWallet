<?php
	require("auth.php");
	include('../db-connect/db2.php');
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="text/css" sizes="16x16" href="../images/logo.png">
	<title>Future Secure</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<?php
	include("include/css.php");
	?>    
     <style>
		td{text-transform:uppercase;}
	</style>
    <link rel="stylesheet" href="../css/custom_style.css" />
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
        
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Access Permission</h3>
            </div>
            
            
         	  <div class="box-body no-padding">
				 <div class="box-body">
		  		  <div class="col-xs-12 table_div">
		  		  <table id="example1" class="table table-bordered table-striped table-responsive">
                   <thead>
                     <tr>
                         <th>Account No</th>	
                         <th>Name</th>
                         <th>Gender</th>
                         <th>Age</th>
                         <th>Address</th>
                         <th>Aadhar</th>
                         <th>Contact</th>
                         <th>Action</th>
                       </tr>
                  </thead>
                <tbody>	
                        <?php
					$result = $db->prepare("select * from  account");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++)
						{
						$ac_account_no = $row['ac_account_no'];
						echo"<tr>";						
							echo"<td>".$row["ac_account_no"]."</td>";	
							echo"<td>".$row["ac_name"]."</td>";
							echo"<td>".$row["ac_sex"]."</td>";	
							echo"<td>".$row["ac_age"]."</td>";	
							echo"<td>".$row["ac_mob"]."</td>";	
							echo"<td>".$row["ac_adhar"]."</td>";	
							echo"<td>".$row["ac_mob"]."</td>";	
						if($row["ac_stat"]=='Pending')
						  {
						?>
						<td>
<a href="save_and_update_delete/ac_permission_accept.php<?php echo '?ac_account_no='.$ac_account_no; ?>" class=" btn btn-sm btn-success">&nbsp;Access</a>  
						</td>    								                           
						<?php
						  }
						  else
						  {
						?>
						  <td>
<a href="save_and_update_delete/ac_permission_reject.php<?php echo '?ac_account_no='.$ac_account_no; ?>" class=" btn btn-sm btn-danger">&nbsp;Block</a>  
						 </td>    
						 <?php		  
						  }									  	
						echo"</tr>";
					   } 
					   ?>												  	
				</tbody>
              </table>
              </div>
              	<a href="index.php" style="float:right" class="btn btn-facebook btn-primary m_t_1">Back</a>
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>
