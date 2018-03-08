<?php 
require './class/myclass.php';
connection_open();
#check_login();
if($_POST)
{
  
   $eventtitle= $_POST['eventtitle'];
   $eventdesc= $_POST['eventdesc'];
   $eventstart= $_POST['eventstart'];
   $eventend= $_POST['eventend'];
   $eventvote= $_POST['eventvote'];
   $eventendvote= $_POST['eventendvote']; 
   $eventresult= $_POST['eventresult'];
   $q = mysql_query("insert into event (Event_Title,Event_Desc,Event_First_Registration_Date,Event_Last_Registration_Date,Event_Voting_Date,Event_End_Voting_Date,Event_Result_Date) values('{$eventtitle}','{$eventdesc}','{$eventstart}','{$eventend}','{$eventvote}','{$eventendvote}','{$eventresult}')") or die(mysql_error());
    
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
                            
                  <h2 align="center" class="grey">Event Insertion Form</h2>
                 <form class="contact-form" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                      
                      Title of Event:<input id="contact-name" type="text" name="eventtitle" class="form-control" placeholder="Enter Title of Event*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Event Description:<input id="contact-name" type="text" name="eventdesc" class="form-control" placeholder="Enter Description of Event*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Event Starting Date:<input id="contact-name" type="date" name="eventstart" class="form-control" placeholder="Enter Starting Date of Event*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Event Ending Date:<input id="contact-name" type="date" name="eventend" class="form-control" placeholder="Enter Ending Date of Event*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Event Voting Date:<input id="contact-name" type="date" name="eventvote" class="form-control" placeholder="Enter Voting Date of Event*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Event End Voting Date:<input id="contact-name" type="date" name="eventendvote" class="form-control" placeholder="Enter End Voting Date of Event*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Event Result Date:<input id="contact-name" type="date" name="eventresult" class="form-control" placeholder="Enter Result Date*" required="required"  >
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
