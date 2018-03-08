<?php 
require 'admin/class/myclass.php';
connection_open();
#check_login();
if($_POST)
{
    $fname = $_POST['firstname'];
    $lname=$_POST['lastname'];
    $gender = $_POST['gender'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobileno=$_POST['mobileno'];
    $picture=  time(). "-". $_FILES['picture']['name'];
    $is_photographer = $_POST['is_photo'];
    
     if($is_photographer=='Photographer'){
       
        $q = mysql_query("insert into photographer_register (Photographer_Fname,Photographer_Lname,Photographer_Gender,Photographer_City,Photographer_Email,Photographer_Pswd,Photographer_Mobile,Photographer_Picture) values('{$fname}','{$lname}','{$gender}','{$city}','{$email}','{$password}','{$mobileno}','{$picture}')") or die(mysql_error());
            if($q)
      {
        move_uploaded_file($_FILES['picture']['tmp_name'], "admin/pphotos/".$picture);
              require 'admin/alertbox/registrationbox.php';
    }
        
        
    }else{
        
           $q = mysql_query("insert into user_register (User_Fname,User_Lname,User_Gender,User_City,User_Email,User_Pswd,User_Mobile,User_Picture) values('{$fname}','{$lname}','{$gender}','{$city}','{$email}','{$password}','{$mobileno}','{$picture}')") or die(mysql_error());
            if($q)
    {
        move_uploaded_file($_FILES['picture']['tmp_name'], "admin/pphotos/".$picture);
              require 'admin/alertbox/registrationbox.php';
    }
        
        
        
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
    
    .sign-up-form h2 {
    font-family: 'Agency FB', sans-serif;
    margin: 23px 0 12px;
    }
    p {
    margin: -22px 0 10px;
}
#banner {
    background: url(admin/images/maxresdefault.jpg) fixed no-repeat;
    background-position: initial;
    background-size: cover;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
}
.sign-up-form {
    background: linear-gradient(to bottom, rgba(68,76,88,.3), rgba(8,12,9,.8) 65%);
    position: absolute;
    width: 340px;
    min-height: 550px;
    top: 0;
    padding: 10px 30px;
    text-align: center;
    color: #fff;
    z-index: 1000;
}
.sign-up-form:after {
    content: "";
    border-color: #080c09 transparent transparent;
    opacity: .9;
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
						<p class="signup-text">Login explore the world of photography</p>
                                                <form method="post">
							<!-- <fieldset class="form-group">
								<input type="text" class="form-control" id="example-name" placeholder="Enter name">
							</fieldset> -->
							<fieldset class="form-group">
                                                            <input type="text" name="firstname" class="form-control" id="example-email" required="true" placeholder="Enter First Name">
							</fieldset>
							<fieldset class="form-group">
								<input type="text" name="lastname" class="form-control" id="example-password" required="true" placeholder="Enter Last Name">
							</fieldset>
                                                        <fieldset class="form-group">
								<input type="text" name="gender" class="form-control" id="example-password" required="true" placeholder="Enter Gender">
							</fieldset>
                                                        <fieldset class="form-group">
								<input type="text" name="city" class="form-control" id="example-password" required="true" placeholder="Enter City">
							</fieldset>
                                                        <fieldset class="form-group">
								<input type="email" name="email" class="form-control" id="example-password" required="true" placeholder="Enter Email">
							</fieldset>
                                                        <fieldset class="form-group">
								<input type="password" name="password" class="form-control" id="example-password" required="true" placeholder="Enter Password">
							</fieldset>
                                                        <fieldset class="form-group">
                                                            <input type="number" name="mobileno" class="form-control" id="example-password" required="true" placeholder="Enter Mobile No">
							</fieldset> 
                                                        <fieldset class="form-group">
                                                         <input  type="file"  name="picture" class="form-control" id="example-password" required="true" placeholder="Your Photo" >
							</fieldset> 
                                                        <fieldset class="form-group">
								   
                                                                   

                                                                        
                                                                        <select name="is_photo" class="form-control">
                                                                            <option>Select User Type</option>
                                                                            <option>User</option>
                                                                            <option>Photographer</option>

                                                                        </select>

                                                             
							</fieldset>
                                                        <!-- <input type="submit" name="submit" value="LogIn" class="btn-secondary"> -->
						 <button name="submit" class="btn-secondary">Register</button>  
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