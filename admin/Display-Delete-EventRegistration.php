<?php 
require './class/myclass.php';
connection_open();
#check_login();
if(isset($_GET['did']))
{
    $deleteid=$_GET['did'];
    mysql_query("delete from event_registration where Event_Registration_ID='{$deleteid}'") or die(mysql_error());
    require './alertbox/deletealert.php';
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
        <img src="images/background.jpg" style="width:100%;height:400px;">
    </div>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-10 col-md-offset-1">
            <div class="contact-us">
            	<div class="row">
            		<div class="col-md-12 col-sm-7">
                            
                  <h2 align="center" class="grey">Display Event Registrations</h2>
                  
                   <?php
                            $q = mysql_query("SELECT
    `event_registration`.`Event_Registration_ID`
    , `event`.`Event_Title`
    , `event_registration`.`Registraiton_Date`
    , `photographer_register`.`Photographer_Fname`
    , `photographer_register`.`Photographer_Lname`
    , `event_registration`.`Photo_URL`
FROM
    `project`.`event`
    INNER JOIN `project`.`event_registration` 
        ON (`event`.`Event_ID` = `event_registration`.`Event_ID`)
    INNER JOIN `project`.`photographer_register` 
        ON (`photographer_register`.`Photographer_Register_ID` = `event_registration`.`Photographer_Register_ID`);") or die(mysql_error());
                             $count=  mysql_num_rows($q);
                         #  echo "<h4 class='grey'>$count records found</h4>";
                            echo "$count records found  ";
                            echo "<table>";
                            echo "<th >ID</th>";
                            echo "<th > Title</th>";
                            echo "<th >Registration Date</th>";
                            echo "<th >Photographer Name</th>";
                            echo "<th >Photo </th>";
                            echo "<th >Action</th>";
                            while($data=  mysql_fetch_row($q))
                            {
                                echo "<tr>";
                                echo "<td >$data[0]</td><td>$data[1]</td><td >$data[2]</td><td >$data[3] $data[4]</td><td ><a href='pphotos/$data[5]' target='_blank'><img style='width:100px;' src='pphotos/$data[5]'></td><td><a href=''><img src='./images/1284.png' width='20px'></a> | <a href='Display-Delete-City.php?did=$data[0]'><img src='./images/delete-128.png' width='20px'></a></td>";
                                
                                echo "</tr>";
                            }
                            echo "</table>";
                   
                   ?>
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
