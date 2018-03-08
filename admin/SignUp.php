
<?php 
require './class/myclass.php';
connection_open();
#check_login();
if($_POST)
{
    $adminname = $_POST['adminname'];
    $adminmail = $_POST['adminmail'];
    $adminpass = $_POST['adminpass'];
    
    
    $q = mysql_query("insert into admin (admin_name,admin_email,admin_password) values('{$adminname}','{$adminmail}','{$adminpass}')") or die(mysql_error());
    
    if($q)
    {
           require './alertbox/registrationbox.php';
    }
    
}

?>
<html>

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
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
    <style>
        #banner {
    background: url(./images/alligator-eyes-1080p-hd-wallpaper-for-desktop.jpg) fixed no-repeat;
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100%;
    position: fixed;
}

.sign-up-form {
    background: linear-gradient(to bottom, rgba(0,0,0,.5), rgba(32,35,31,.7) 65%);
    position: absolute;
    width: 340px;
    min-height: 550px;
    top: 0;
    padding: 40px 30px;
    text-align: center;
    color: #fff;
    z-index: 1000;
    margin-left: 650px;
}
 
.sign-up-form:after {
    content: "";
    border-color: rgba(41,38,25,.7) transparent transparent;
    border-style: solid;
    border-width: 40px 170px 0;
    bottom: -40px;
    height: 0;
    left: 0;
    position: absolute;
    width: 0;
}
    </style>
	</head>
        
        <body>
<section id="banner">
			<div class="container">

        <!-- Sign Up Form
        ================================================= -->
        <div class="sign-up-form">
					<a href="index.html" class="logo"><img  src="images/wildlife/logo2.png" style="width:200px; height:100px;" alt="WildPhy Photography"/></a>
					<h2 class="text-white">Wildphy Photography</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">
						<p class="signup-text">Login now and meet awesome people around the world</p>
						<form method="post">
							<fieldset class="form-group">
                                                            <input type="text" class="form-control" name="adminname" id="example-name" placeholder="Enter name" required="true">
							</fieldset>
							<fieldset class="form-group">
								<input type="email" class="form-control" name="adminmail" id="example-email" placeholder="Enter email" required="true">
							</fieldset>
							<fieldset class="form-group">
								<input type="password" class="form-control" name="adminpass" id="example-password" placeholder="Enter a password" required="true"a>
							</fieldset>
                                                    <button class="btn-secondary">Signup</button><br><br><br>
                                                    <p>By signning up you agree to the terms</p>
						</form>
						
						
					</div>
					
					<img class="form-shadow" src="images/bottom-shadow.png" alt="" /> 
				</div><!-- Sign Up Form End -->

<!--        <svg class="arrows hidden-xs hidden-sm">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
          <path class="a2" d="M0 20 L30 52 L60 20"></path>
          <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg> -->
			</div>
		</section>
        
        </body>
        </html>