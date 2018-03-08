<?php 
require './class/myclass.php';
connection_open();
//check_login();
if($_POST)
{
    $question = $_POST['question'];
    $opta = $_POST['opta'];
    $optb = $_POST['optb'];
    $optc = $_POST['optc'];
    $optd = $_POST['optd'];
    $corans = $_POST['corans'];
    
    
    $q = mysql_query("insert into questions (Question,Opt_A,Opt_B,Opt_C,Opt_D,Correct_Answer) values('{$question}','{$opta}','{$optb}','{$optc}','{$optd}','{$corans}')") or die(mysql_error());
    
    if($q)
    {
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
                            
                  <h2 align="center" class="grey">Question Insertion Form</h2>
                <form class="contact-form" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                      
                      Question:<input id="contact-name" type="text" name="question" class="form-control" placeholder="Enter Question*" required="required"  >
                    </div>
                    <div class="form-group">
                      
                      Option A:<input id="contact-name" type="text" name="opta" class="form-control" placeholder="Enter Question A*" required="required"  >
                    </div>
                    <div class="form-group">
                      
                      Option B:<input id="contact-name" type="text" name="optb" class="form-control" placeholder="Enter option B*" required="required"  >
                    </div>
                    <div class="form-group">
                      
                      Option C:<input id="contact-name" type="text" name="optc" class="form-control" placeholder="Enter option C*" required="required"  >
                    </div>
                    <div class="form-group">
                      
                      Option D:<input id="contact-name" type="text" name="optd" class="form-control" placeholder="Enter option D*" required="required"  >
                    </div>
                    <div class="form-group">

                        Correct Answer:<input id="contact-name" type="text" name="corans" class="form-control" placeholder="Enter Country Name*" required="required"  >
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
