<?php
	include("auth.php");
    include('../db-connect/db2.php');
    $account_no=$_GET["account_no"];
	$result = $db->prepare("select * from  account where ac_account_no='$account_no'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{	
		$ac_account_no =$row["ac_account_no"];
		$photo2 =$row["photo2"];
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

<script type="text/javascript">
<!--
	var Point = 1;
	var X1, Y1, X2, Y2;
function FindPosition(oElement)
{
  if( typeof( oElement.offsetParent ) != "undefined" )
  {
    for( var posX = 0, posY = 0; oElement; oElement = oElement.offsetParent )
    {
      posX += oElement.offsetLeft;
      posY += oElement.offsetTop;
    }
    return [ posX, posY ];
  }
  else
  {
    return [ oElement.x, oElement.y ];
  }
}
 
function GetCoordinates(e)
{
 var PosX = 0;
 var PosY = 0;
 var ImgPos;
 ImgPos = FindPosition(myImg);
 if (!e) var e = window.event;
 if (e.pageX || e.pageY)
 {
  PosX = e.pageX;
  PosY = e.pageY;
 }
 else if (e.clientX || e.clientY)
   {
    PosX = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
    PosY = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
 }
 PosX = PosX - ImgPos[0];
 PosY = PosY - ImgPos[1];
 if (Point == 1)
 {
   X1 = PosX;
   Y1 = PosY;
   Point = 2;
 
   document.getElementById("x1").value = PosX;
   document.getElementById("y1").value = PosY;
//   document.getElementById("x1").innerHTML = PosX;
//   document.getElementById("y1").innerHTML = PosY;
 }
 else
 {
   X2 = PosX;
   Y2 = PosY;
   Point = 3;
    <?php
		$x2="<script>document.writeln(PosX)</script>";   
		$y2="<script>document.writeln(PosY)</script>";  
	?>
   document.getElementById("x2").value = PosX;
   document.getElementById("y2").value = PosY;
   document.form1.drawbutton.disabled = false;
 }
}

function Clear()
{
  Point = 1;
  document.getElementById("x1").innerHTML = '';
  document.getElementById("y1").innerHTML = '';
  document.getElementById("x2").innerHTML = '';
  document.getElementById("y2").innerHTML = '';
  document.form1.drawbutton.disabled = true;
  myImg.src = "rectangle.asp";
}

function Draw()
{
  myImg.src = "rectangle.asp?x1=" + X1 + "&y1=" + Y1 + "&x2=" + X2 + "&y2=" + Y2;
  document.form1.drawbutton.disabled = true;
}

function Initialisation()
{ 
  document.form1.drawbutton.disabled = true
}

//-->
</script>       
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
                            	Password Set
                            </div>
							<div class="panel-body">           
                             	<form method="post" action="save_and_update_delete/reset_password_set_two.php" autocomplete="off" name="form1">
                                    <div class="col-md-6 col-sm-12 col-xs-12 well">                                                                              
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                  		<img src="../photo/<?php echo $photo2;?>" style="width:400px; height:400px;" id="myImgId">
                                            <input type="text" id="x1" name="x1"></input>
                                            <input type="text" id="y1" name="y1"readonly></input>
                                            <input type="hidden" id="x2" name="x2"></input>
                                            <input type="hidden" id="y2"  name="y2"></input>
                                            <input type="hidden" name="account_no" value="<?php echo $ac_account_no;?>"></input>
                                            <br>
                                        <script type="text/javascript">
                                            <!--
                                            var myImg = document.getElementById("myImgId");
                                            myImg.onmousedown = GetCoordinates; 
                                            //-->
                                        </script>
                                        </div>                                        
                                        
                                        <div class="col-md-6 col-sm-12 col-xs-12" style="float:right">
                                            <br>
                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                <input type="submit" value="Next" class="btn btn-block btn-primary">
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
