<?php 
require './class/myclass.php';
connection_open();
#check_login();
if($_POST)
{
     $videoid=$_POST['videoid'];
    $userid=$_POST['userid'];
    $like=$_POST['like'];
$photographerid=$_POST['photographerid'];   
    
    $q = mysql_query("insert into video_like (Video_ID,User_Register_ID,likes,Photographer_Register_ID) values('{$videoid}','{$userid}','{$like}','{$photographerid}')") or die(mysql_error());
    
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
                            
                  <h2 align="center" class="grey">Video Like Form</h2>
             <form class="contact-form" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                      
                      Video ID:
                      <select name="videoid" id="contact-name" class="form-control">
                          <?php
                          $q=  mysql_query("select * from videos") or die(mysql_error());
                          while($data=  mysql_fetch_row($q))
                          {
                              echo "<option value='$data[0]]'>$data[1]</option>";
                          }
                          
                          ?>
                      </select>

                    </div>
                       <div class="form-group">
                      
                      User Register ID:
                      
                      <select name="userid" id="contact-name" class="form-control">
                          <?php
                          $q=  mysql_query("select * from user_register") or die(mysql_error());
                          while($data=  mysql_fetch_row($q))
                          {
                              echo "<option value='$data[0]]'>$data[1] $data[2]</option>";
                          }
                          
                          ?>
                      </select>

                    </div>
                  <div class="form-group">
                      
                      Total Likes:<input id="contact-name" type="text" name="like" class="form-control" placeholder="Enter Total Likes*" required="required"  >
                    </div>
                       <div class="form-group">
                      
                      Photographer Register ID:
                      
                      <select name="photographerid" id="contact-name" class="form-control">
                          <?php
                          $q=  mysql_query("select * from photographer_register") or die(mysql_error());
                          while($data=  mysql_fetch_row($q))
                          {
                              echo "<option value='$data[0]]'>$data[1] $data[2]</option>";
                          }
                          
                          ?>
                      </select>

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
