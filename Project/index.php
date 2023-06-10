<?php
	session_start();
	include('db-connect/db2.php');
	unset($_SESSION['SESS_ADMIN_ID']);
	unset($_SESSION['SESS_SERVER_ID']);
	unset($_SESSION['PINN_NO']);	
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

</head>
<body>

<!--banner start here-->
<div class="banner" id="home">
<div class="agileinfo-dot">
   <div class="header">
		   <div class="header-main">
			 <div class="header-top-agileits">
		   	 <div class="container">
				<div class="w3l-social" data-aos="fade-right">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>			
                <ul class="agile_forms" data-aos="fade-left">
<li><a class="active" href="#" data-toggle="modal" data-target="#forgot"><i class="fa fa-sign-in" aria-hidden="true"></i> Forgot</a> </li>
				</ul>
                <ul class="agile_forms" data-aos="fade-left">
<li><a class="active" href="#" data-toggle="modal" data-target="#user"><i class="fa fa-sign-in" aria-hidden="true"></i> User</a> </li>
				</ul>
				<div class="clearfix"> </div>
				</div>
			</div>
		   	 <div class="container">
			  <nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php">Secure Wallet</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php" class="scroll">Home</a></li>							
							<li><a href="#" data-toggle="modal" data-target="#admin">Admin</a> </li>	
                            <li><a href="#" data-toggle="modal" data-target="#server">Server</a> </li>		
                            <li><a href="#system" class="scroll">System</a></li>
                            <li><a href="#about" class="scroll">About</a></li>
							<li><a href="#contact" class="scroll">Contact</a></li>
						</ul>

					</div>
				</nav>
		   </div>
		   </div>
		<div class="container">
		   <div class="banner-bottom">
		   	   <section class="slider">
				 <div class="flexslider">
					<ul class="slides">
					  <li>
					  	<div class="banner-bottom-text">
					  			<h3>Get around the clock support from payroll experts</h3>
					 	</div>
					  </li>
					  <li>
					  	<div class="banner-bottom-text">
					  		<h3>Run payroll in just a few easy steps</h3>
					 	</div>
					  </li>
					  <li>
					  	<div class="banner-bottom-text">
					  			<h3>Get around the clock support from payroll experts</h3>
					 	</div>
					  </li>
					  <li>
					  	<div class="banner-bottom-text">
					  		<h3>Run payroll in just few easy steps</h3>
					 	</div>
					  </li>			  
				    </ul>
				 </div>
				 <div class="clearfix"> </div>
		      </section>
			<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-chevron-down" aria-hidden="true"></i>
				</a>
			</div>
		   </div>
		</div>
	</div>
</div>
</div>
<!--banner end here-->

	<!-- Admin -->
		<div class="modal fade" id="admin" tabindex="-1" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                        <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Login</h3>	
                                <div class="login-form">
                                    <form action="admin_login.php" method="post" autocomplete="off">
                                        <input type="text" name="username" placeholder="Username" required="">
                                        <input type="password" name="password" placeholder="Password" required="">
                                        <div class="tp">
                                            <input type="submit" value="Login">
                                        </div>                                      
                                    </form>
                                </div>
                                <div class="login-social-grids">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
     <!-- Server -->
		<div class="modal fade" id="server" tabindex="-1" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                        <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Login</h3>	
                                <div class="login-form">
                                    <form action="server_login.php" method="post" autocomplete="off">
                                        <input type="text" name="username" placeholder="Username" required="">
                                        <input type="password" name="password" placeholder="Password" required="">
                                        <div class="tp">
                                            <input type="submit" value="Login">
                                        </div>                                      
                                    </form>
                                </div>
                                <div class="login-social-grids">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Server -->
		<div class="modal fade" id="user" tabindex="-1" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                        <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Login</h3>	
                                <div class="login-form">
                                    <form action="user_login_one.php" method="post" autocomplete="off">
                                        <input type="text" name="ac_account_nopass" placeholder="Unique Id" required="">
                                        <div class="tp">
                                            <input type="submit" value="Login">
                                        </div>                                      
                                    </form>
                                </div>
                                <div class="login-social-grids">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
      

        <!-- Server -->
		<div class="modal fade" id="forgot" tabindex="-1" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                        <div class="signin-form profile">
                        <h3 class="agileinfo_sign">Forgot Password</h3>	
                                <div class="login-form">
                                    <form action="user_forgot.php" method="get" autocomplete="off">
                                        <input type="email" name="ac_email" placeholder="Email" required="">
                                        <div class="tp">
                                            <input type="submit" value="Submit">
                                        </div>                                      
                                    </form>
                                </div>
                                <div class="login-social-grids">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
      
<!--banner bottom-->
<div class="banner-btm-w3layouts" id="about">
	<div class="container">
	<!---728x90--->

	<div class="tittle-agileinfo">
		<span>01</span>
		<h2>Welcome to small business accounting</h2>
		<p >Suspendisse fringilla pellentesque risus sit amet bibendum.</p>
	</div>
	<!---728x90--->

		<div class="about-main">
		<div class="col-md-4 about-grids" data-aos="zoom-in">
			<i class="fa fa-bookmark-o" aria-hidden="true"></i>
			<h3 class="subheading-agileits-w3layouts">Accounting & Bookkeeping</h3>
			<p class="para-agileits-w3layouts">Duis sit amet nisi quis leo fermentum vestibulum vitae eget augue. Sed feugiat quam nec mauris mattis malesuada.</p>
		</div>
		<div class="col-md-4 about-grids" data-aos="zoom-in">
			<i class="fa fa-handshake-o" aria-hidden="true"></i>
			<h3 class="subheading-agileits-w3layouts">Tax, Compliance & Payroll</h3>
			<p class="para-agileits-w3layouts">Duis sit amet nisi quis leo fermentum vestibulum vitae eget augue. Sed feugiat quam nec mauris mattis malesuada.</p>
		</div>
		<div class="col-md-4 about-grids" data-aos="zoom-in">
			<i class="fa fa-money" aria-hidden="true"></i>
			<h3 class="subheading-agileits-w3layouts">Growth & Funding Access</h3>
			<p class="para-agileits-w3layouts">Duis sit amet nisi quis leo fermentum vestibulum vitae eget augue. Sed feugiat quam nec mauris mattis malesuada.</p>
		</div>
		<div class="clearfix"> </div>	
		</div>
	</div>
</div>

<!--//banner bottom-->

<!--services -->
<div class="services-agileits" id="system">
	<div class="container">
	<!---728x90--->

	<div class="tittle-agileinfo">
		<span>02</span>
		<h3>Accounting Services</h3>
		<p >Suspendisse fringilla pellentesque risus sit amet bibendum.</p>
	</div>
		<div class="services-agileits-w3layouts">
		<div class="col-md-3 service-grids">
			<i class="fa fa-bookmark-o" aria-hidden="true" data-aos="zoom-in"></i>
			<p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
			<h4>Standard Bookkeeping</h4>
		</div>
		<div class="col-md-3 service-grids">
			<i class="fa fa-line-chart" aria-hidden="true" data-aos="zoom-out"></i>
			<p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
			<h4>Taxes Optimization</h4>
		</div>
		<div class="col-md-3 service-grids">
			<i class="fa fa-money" aria-hidden="true" data-aos="zoom-in"></i>
			<p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
			<h4>SMB Accountants</h4>
		</div>
		<div class="col-md-3 service-grids">
			<i class="fa fa-pencil-square-o" aria-hidden="true" data-aos="zoom-out"></i>
			<p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
			<h4>Any Accounting</h4>
		</div>
		<div class="col-md-3 service-grids">
			<i class="fa fa-handshake-o" aria-hidden="true"></i>
			<p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
			<h4>Helping Businesses</h4>
		</div>
		<div class="col-md-3 service-grids">
			<i class="fa fa-area-chart" aria-hidden="true" data-aos="zoom-in"></i>
			<p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
			<h4>Auditing & Individual</h4>
		</div>
		<div class="col-md-3 service-grids" >
			<i class="fa fa-users" aria-hidden="true" data-aos="zoom-out"></i>
			<p class="para-agileits-w3layouts">Vestibulum vitae eget augue.</p>
			<h4>Seasoned Team</h4>
		</div>
		<img src="images/services1.png" class="img-responsive" data-aos="slide-up" alt=""/>
		<div class="clearfix"> </div>	
		</div>
	</div>
</div>

<!-- //services -->

<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
		<div class="tittle-agileinfo">
			<span>06</span>
			<h3>Customers feedback</h3>
			<p >Suspendisse fringilla pellentesque risus sit amet bibendum.</p>
		</div>
			<div class="w3_testimonials_grids">
				<div id="slideshow" class="disabled">
					<button class="previous"><b>« Previous</b></button>
					<button class="next"><b>Next »</b></button>
					<div class="strip">
						<div class="slide sticky">
							<div class="col-md-6 agileinfo_team_grid" data-aos="zoom-in">
								<div class="agileinfo_team_grid1">
									<div class="test-top-wthree">
									<img src="images/t1.jpg" alt="" />
										<div class="test-right-wthree">
											<h6>Federica</h6>
											<p>Lorem ipsum dolor sit amet, </p>
										</div>
									<div class="clearfix"> </div>
									</div>
									<div class="test-bottom-w3-agile">
										<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-agileits-w3layouts">Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis autem vel eum iure reprehend.Unicmquam eius, Basmodi temurer sehsMunim.Masagni dolores eoquie int Basmodi temporant.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 agileinfo_team_grid" data-aos="zoom-in">
								<div class="agileinfo_team_grid1">
									<div class="test-top-wthree">
									<img src="images/t2.jpg" alt="" />
										<div class="test-right-wthree">
											<h6>Liza Brent</h6>
											<p>Lorem ipsum dolor sit amet, </p>
										</div>
									<div class="clearfix"> </div>
									</div>
									<div class="test-bottom-w3-agile">
										<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-agileits-w3layouts">Masagni dolores eoquie int Basmodi temporant,</p>
									</div>
								</div>
							</div>
						</div>
						<div class="slide">
							<div class="col-md-6 agileinfo_team_grid" data-aos="zoom-in">
								<div class="agileinfo_team_grid1">
									<div class="test-top-wthree">
									<img src="images/t3.jpg" alt="" />
										<div class="test-right-wthree">
											<h6>Leslie gross</h6>
											<p>Lorem ipsum dolor sit amet, </p>
										</div>
									<div class="clearfix"> </div>
									</div>
									<div class="test-bottom-w3-agile">
										<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-agileits-w3layouts">Masagni dolores eoquie int Basmodi temporant,</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 agileinfo_team_grid" data-aos="zoom-in">
								<div class="agileinfo_team_grid1">
									<div class="test-top-wthree">
									<img src="images/t4.jpg" alt="" />
										<div class="test-right-wthree">
											<h6>Kimberly Barker</h6>
											<p>Lorem ipsum dolor sit amet, </p>
										</div>
									<div class="clearfix"> </div>
									</div>
									<div class="test-bottom-w3-agile">
										<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-agileits-w3layouts">Masagni dolores eoquie int Basmodi temporant</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- newsletter -->
<div class="agileits_w3layouts newsletter" id="contact">
	<div class="container">
		<div class="col-md-6 news-left" data-aos="fade-up">
			<h3 class="f-w3ls">Follow us on</h3>
			<div class="follow-left-agileits">
			
			</div>
			<div class="follow-right-agileinfo">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Google</span></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i><span>Linkedin</span></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-6 news-right" data-aos="fade-up">
		<h3>Subscribe Now</h3>
		<p>Masagni dolores eoquie int Basmodi temporant, ut laboreas dolore magnam aliquam kuytase uaeraquis</p>
			<form action="#" method="post">
				<input class="email" type="email" name="Email" placeholder="Email" required="">
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //newsletter -->

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
<script src="js/slideshow.min.js"></script>
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