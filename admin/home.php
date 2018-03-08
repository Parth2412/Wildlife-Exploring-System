<?php
include './class/myclass.php';
connection_open();
session_start();

$admin_id = $_SESSION['admin_id'];

$admin = mysql_query("select * from admin where admin_id='{$admin_id}'");
$admin_name = mysql_fetch_array($admin);


?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from thunder-team.com/friend-finder/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:08:49 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>WildPhy</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!--Google Webfont-->
		<link href='../../fonts.googleapis.com/csse7ae.css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="../images/logo/favicon-32x32.png"/>

	</head>
	<body>

    <!-- Header
    ================================================= -->
		<?php
               # include './themepart/top-menu.php';

                ?>
    
    <style>
    
    .contact-us {
    background: #fff;
    padding: 40px;
    margin-top: -140px;
    border-radius: 4px;
    width: 1100px !important;
    margin-left: -120px !important;
}
    
</style>


<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu" style="height:75px">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="index.html"><img class="finalimage" src="../images/wildlife/logo2.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              
           
           <ul class="nav navbar-nav navbar-right main-menu">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:33px; font-size:16px; ">Hi,&nbsp;<?php echo $admin_name['admin_name']; ?> </a>
                  <ul class="dropdown-menu newsfeed-home">
                      <li class="dropdown"><a href="ChangePassword.php">Change Password</a></li>
                    <li class="dropdown"><a href="Logout.php">Logout</a></li>
                  </ul>
              </li>
         
              
              
              
            </ul>
               <ul class="nav navbar-nav navbar-right main-menu">
                <li class="dropdown">
                    <a href="home.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/images_3.png" width='55px' ></img> </a>
              </li>
         
              
              
              
            </ul>
           
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
 
    <!--Header End-->


    <!-- Features Section
    ================================================= -->
		<section id="features">
			<div class="container wrapper">
				<h1 class="section-title slideDown">Dashboard</h1>
				<div class="row slideUp">
					<div class="feature-item col-md-2 col-sm-6 col-xs-6 col-md-offset-2 " style="margin-left: 8.666667%" >
                                            <div class="feature-icon"><a href="Display-Delete-PhotographerRegistrationForm.php"><i class="icon ion-person-add"></i></a></div>
						<h3>Photographers</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
                                            <div class="feature-icon"><a href="Display-Delete-UserRegistrationForm.php"><i class="icon ion-person-add"></i></a></div>
						<h3>Users</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
                                            <div class="feature-icon"><a href="Display-Delete-Feedback.php"><i class="icon ion-chatbox-working"></i></a></div>
						<h3>Feedbacks</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
                                            <div class="feature-icon"><a href="Display-Delete-Message.php"><i class="icon ion-chatbox-working"></i></a></div>
						<h3>Messages</h3>
					</div>
                                    <div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><a href=""><i class="icon ion-compose"></i></a></div>
						<h3>Reports</h3>
					</div>
				</div>
				
			</div>

		</section>

    <!-- Download Section
    ================================================= -->

    <!-- Image Divider
    ================================================= -->
    

    <!-- Facts Section
    ================================================= -->
		

    <!-- Live Feed Section
    ================================================= -->
	

    <!-- Footer
    ================================================= -->
		<footer id="footer">
      <div class="container">
      	<div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <ul class="list-inline social-icons">
              	<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>For individuals</h6>
              <ul class="footer-links">
                <li><a href="#">Signup</a></li>
                <li><a href="#">login</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Finder app</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Language settings</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>For businesses</h6>
              <ul class="footer-links">
                <li><a href="#">Business signup</a></li>
                <li><a href="#">Business login</a></li>
                <li><a href="#">Benefits</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Setup</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>About</h6>
              <ul class="footer-links">
                  <li><a href="abooutusterms.php">About us</a></li>
                  <li><a href="contactus.php">Contact us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Help</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-3">
              <h6>Contact Us</h6>
                <ul class="contact">
                	<li><i class="icon ion-ios-telephone-outline"></i>+91 84 8886 8889</li>
                	<li><i class="icon ion-ios-email-outline"></i>XICA</li>
                  <li><i class="icon ion-ios-location-outline"></i>India</li>
                </ul>
            </div>
          </div>
      	</div>
      </div>
      <div class="copyright">
        <p>copyright @DPR Technologies 2017 &copy;. All rights reserved</p>
      </div>
		</footer>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
    
	</body>

<!-- Mirrored from thunder-team.com/friend-finder/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:09:31 GMT -->
</html>
