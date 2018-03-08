<?php 
require './class/myclass.php';
connection_open();
check_login();
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
    
    
    $q = mysql_query("insert into user_register (User_Fname,User_Lname,User_Gender,User_City,User_Email,User_Pswd,User_Mobile,User_Picture) values('{$fname}','{$lname}','{$gender}','{$city}','{$email}','{$password}','{$mobileno}','{$picture}')") or die(mysql_error());
    
    if($q)
    {
         move_uploaded_file($_FILES['picture']['tmp_name'], "pphotos/".$picture);
              require './alertbox/alert.php';
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
	

    <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
	</head>
  <body>
    <?php 
    include './themepart/top-menu.php';
    ?><!--Header End-->
    <div class="google-maps">
             <img src="images/covers/3.jpg" style="width:100%;height:400px;">
    </div>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-10 col-md-offset-1">
            <div class="contact-us">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                            
                  <h2 align="center" class="grey">User Registration Form</h2>
             <form class="contact-form" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                      
                      First Name:<input id="contact-name" type="text" name="firstname" class="form-control" placeholder="Enter First Name*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Last Name:<input id="contact-name" type="text" name="lastname" class="form-control" placeholder="Enter Last Name*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Gender:<input id="contact-name" type="text" name="gender" class="form-control" placeholder="Enter Gender*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      City:<input id="contact-name" type="text" name="city" class="form-control" placeholder="Enter City" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Email:<input id="contact-name" type="text" name="email" class="form-control" placeholder="Enter Your Email*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Password:<input id="contact-name" type="text" name="password" class="form-control" placeholder="Enter Your Password*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Mobile No:<input id="contact-name" type="text" name="mobileno" class="form-control" placeholder="Enter Your Mobile Number*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Picture:<input id="contact-name" type="file" name="picture" class="form-control" placeholder="Select Your Picture*" required="required"  >
                    </div>
                      <input type="submit" value="Submit Query" class="btn-primary"> 
                
                  </form>
                </div>
       
<?php 


                    include './themepart/sidebar.php';
?></div>
            </div>
          </div>
    		</div>
    	</div>
    </div>

    <!-- Footer
    ================================================= -->
   
    <?php 
    
include './themepart/footer.php';
    
    ?>
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
    <!-- Scripts
    ================================================= -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>

</html>
