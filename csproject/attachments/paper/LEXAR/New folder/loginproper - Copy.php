<?php
   include("config.php");
   session_start();
    $error1=$result=$sql="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
	   
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT id FROM users WHERE user_name = '$myusername' and password = '$mypassword'";

      $result = mysqli_query($db,$sql)or die(mysqli_error($db));

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
                 if($count == 1) {
         		 $_SESSION['myusername']=$myusername;
         $_SESSION['login_user'] = $myusername;
          header("location: rhome.html");
      }else {
         $error1 = "Your Login Name or Password is invalid";
		 
      }
   }
?>
<!DOCTYPE HTML>
<html>
	<head>
	<style>
	.ip{
		
		display:inline;
		float:left;
	}
	.ir{
		float:right;
	}
	</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-fluid">
			<div class="row">
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-sm-7 text-left menu-1">
								<ul>
								<li><a href="blog.html">Home</a></li>
									<li><a href="approach.html">Science </a></li>
									<li><a href="quote.html">Blog</a></li>
   									<li><a href="about.html">About</a></li>
									<li><a href="work.html">Work</a></li>
									<li><a href="courses.html">Courses</a></li>
									<li><a href="contact.html">Contact</a></li>
																	
								</ul>
							</div>
							<div class="col-sm-5">
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center menu-2">
					<div id="">
						<h1>
							<a href=""></a>
							<span></span>
							<small></small>
							</a>
						</h1>
					</div>
				</div>
			</div>
		</div>
	</nav>


	<div id="fh5co-content" class="fh5co-no-pd-top">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>Continue the blissful journey</span></h2>
				</div>
			</div>
			
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <div class="ip"><input type = "submit" value = " Submit "/><br /></div>
				 <div class="ir"> <a href="">Forgot password?</a><br></div><br><br>
				  <a href="http://localhost/csproject/attachments/paper/copy3.php">Not a member yet?</a>
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"> <?php echo $error1;?></div>
					
            </div>
				
         </div>
			</div>
			</div>
			
      	<aside id="sidebar" align="right"s>
					<div class="">
						<div class="x">
							<div class="">
								<h2><span></span></h2>
							</div>
							<div class="fh5co-staff">
								<img src="" alt="">
															
							</div>
						</div>
					</div>
				</aside>


	
<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>Blissful Cell</h4>
					<p>Let your soul sing</p>
				</div>
				<div class="col-md-4 col-md-push-1">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">Register</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-md-push-1">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>Christ(Deemed to be) University, <br> </li>
						<li>Bangalore</li>
						<li>blissfulcell@gmail.com</li>
						
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">.</small> 
						<small class="block"> </small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>



