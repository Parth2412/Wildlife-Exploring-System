<?php
require './class/myclass.php';
connection_open();
session_start();
if(isset($_SESSION['admin_id']))
{
    header("location:home.php");
}
if($_POST)
{
    $loginemail = $_POST['loginemail'];
    $loginpswd = $_POST['loginpswd'];  
    #echo "$loginemail";
    #echo "$loginpswd";
    
    $q = mysql_query("SELECT * FROM `admin` where admin_email ='{$loginemail}' and admin_password='{$loginpswd}'") or die(mysql_error());
    $data = mysql_fetch_row($q);
    if($data>0)
    {
        $_SESSION['admin_id'] = $data[0];
//        $_SESSION['Photographer_Pswd'] = $data[1];   
        header("location:home.php");
    }else
    {
        include '../admin/alertbox/login.php';
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
		<title>WildPhy </title>
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
    <style>
    .sign-up-form .form-wrapper button{
  position: relative;
  top: 30px;
  border-radius: 17px;
}
    </style>
	</head>
        
        <body>
<section id="banner">
			<div class="container">

        <!-- Sign Up Form
        ================================================= -->
        <div class="sign-up-form">
            <a href="index.html" class="logo"><img  src="images/wildlife/logo2.png" style="width:200px; height:100px;" alt="Friend Finder"/></a>
					<h2 class="text-white">Wildphy Photography</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">
						<p class="signup-text">Login explore the world of photography</p>
                                                <form method="post">
							<!-- <fieldset class="form-group">
								<input type="text" class="form-control" id="example-name" placeholder="Enter name">
							</fieldset> -->
							<fieldset class="form-group">
								<input type="email" name="loginemail" class="form-control" id="example-email" placeholder="Enter email">
							</fieldset>
							<fieldset class="form-group">
								<input type="password" name="loginpswd" class="form-control" id="example-password" placeholder="Enter a password">
							</fieldset>
                                                        <!-- <input type="submit" name="submit" value="LogIn" class="btn-secondary"> -->
						 <button name="submit" class="btn-secondary">Login</button>  
						</form>
 
					</div>
                                         &nbsp;<a href="forgot-password.php">Forgot Password ?</a>
                                         <br>&nbsp;<a href="SignUp.php">Sign-up</a>
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