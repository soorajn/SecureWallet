<?php
    include('db-connect/db2.php');
    $ac_account_no=$_GET["ac_account_no"];
	$result = $db->prepare("select * from  account where ac_account_no='$ac_account_no'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{	
		$photo1 =$row["photo1"];
	}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Secure Wallet</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Secured Transfer For Stego Vision" />

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-css-->
<link href="fonts/css/font-awesome.css" rel="stylesheet"> <!--font-awesome-css-->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /><!--flexslider-css-->
<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" /><!--skill-circles-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!--style-sheet-->
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" /><!--Animation-effects-css-->
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
<script language ="javascript" >
        var tim;
       
        var min = 1;
        var sec = 60;
        var f = new Date();
        function f1() {
            f2();
            document.getElementById("starttime").innerHTML = "START " + f.getHours() + ":" + f.getMinutes();
             
          
        }
        function f2() {
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML = "TT : "+min+" MN : LF : " + sec+" SE";
                tim = setTimeout("f2()", 1000);
            }
            else {
                if (parseInt(sec) == 0) {
                    min = parseInt(min) - 1;
                    if (parseInt(min) == 0) {
                        clearTimeout(tim);
                        location.href = "index.php";
                    }
                    else {
                        sec = 60;
                        document.getElementById("showtime").innerHTML = "Your Left Time  is : " + min + " Minutes ," + sec + " Seconds";
                        tim = setTimeout("f2()", 1000);
                    }
                }
               
            }
        }
 </script>
    </head>
<body onload="f1()">

<div class="agileinfo-tow1">
 <div class="container">
              <nav class="navbar navbar-default">					
                    <div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">                           
                            <li><a href="index.php">Back</a></li>                                                
                        </ul>
                    </div>
                </nav>
            </div>		 
</div>
<!--banner end here-->


<!-- newsletter -->
<div class="agileits_w3layouts newsletter">
	<div class="container">
		<div class="col-md-6 news-left" data-aos="fade-up">
			<h3 class="f-w3ls">Time</h3>
			<div class="follow-left-agileits">
			
			</div>
			<div class="follow-right-agileinfo">
				<ul>
<table class="table table-bordered">      
<tr>
	<td>
<div id="starttime" style="color:white;font-size:25px;text-indent:30px;word-spacing:10px;text-shadow:0px 2px 2px black;letter-spacing:3px;"></div>
	</td>
</tr>
<tr>
	<td>
		<div id="endtime"></div>
    </td>
</tr>
<tr>
	<td>
		<div id="showtime" style="color:white;font-size:25px;text-indent:30px;word-spacing:3px;text-shadow:0px 2px 2px black;letter-spacing:3px;"></div>
	</td>
</tr>
</table>
				</ul>
			</div>
		</div>
		<div class="col-md-6 news-right" data-aos="fade-up">
		<h3>First Coordination</h3>
        	<form method="post" action="user_first_image_password_one.php" autocomplete="off" name="form1">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <img src="photo/<?php echo $photo1;?>" width="400" height="400" id="myImgId">
                	<br>
                    <input type="text" id="x1" name="x1" style="width:20%"></input>
                    <input type="text" id="y1" name="y1" style="width:20%"></input>
                    <input type="hidden" id="x2" name="x2" style="width:20%"></input>
                    <input type="hidden" id="y2" name="y2" style="width:20%"></input>
                    <input type="hidden" name="ac_account_no" value="<?php echo $ac_account_no;?>"></input>
                <script type="text/javascript">
                    <!--
                    var myImg = document.getElementById("myImgId");
                    myImg.onmousedown = GetCoordinates; 
                    //-->
                </script>
                </div>                                        
                
                <div class="col-md-6 col-sm-12 col-xs-12" style="float:right">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <input type="submit" value="Next" class="btn btn-block btn-primary">
                    </div>                                            
                </div>
         </form>
		</div>
		<div class="clearfix"> </div>
	</div>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br>
</div>
<!-- //newsletter -->
<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">		
			<!--footer-->
			<div class="copy">
		        <p>© 2021 Future Secure. All Rights Reserved | Design by  </p>
		    </div>
			<!--/footer -->
		</div>
	</div>
	<!-- //contact -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>	
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(function(){				 
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
</script>
<!-- FlexSlider -->
<!-- clients-slider-script -->
<script src="js/launcher.js"></script>
<!-- //clients-slider-script -->
<script src="js/jzBox.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
<!-- Animation-effect -->
<script src='js/aos.js'></script>
<script src="js/aosindex.js"></script>
<!-- //Animation-effect -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script src="js/bootstrap.js"></script>
</body>
</html>