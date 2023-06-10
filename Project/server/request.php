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
              <h3 class="box-title">Request</h3>
            </div>
            
            
         	  <div class="box-body no-padding">
				 <div class="box-body">
		  		  <div class="col-xs-12 table_div">
		  		  <table id="example1" class="table table-bordered table-striped table-responsive">
                   <thead>
                    <tr>
                        <th>Pinn No</th>
                        <th>Name</th>                       
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        $result = $db->prepare("select * from  walletotp");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++)
                        {
							$otp_id = $row['otp_id'];
							echo"<tr>";
								echo"<td>".$row["accountno"]."</td>";
								echo"<td>".$row["name"]."</td>";
								echo"<td>".$row["email"]."</td>";
								echo"<td>".$row["mobileno"]."</td>";
								echo"<td>".$row["date"]."</td>";
							?>
                             <td>
                                <a href="request_generate.php<?php echo '?otp_id='.$otp_id; ?>" class=" btn btn-sm btn-primary">Generate</a>
                             </td> 
                            <?php								
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
