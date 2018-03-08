<?php 
include 'admin/class/myclass.php';
connection_open();
session_start();

$photographer_id = $_SESSION['Photographer_id'];

$photographer = mysql_query("select * from photographer_register where Photographer_Register_ID='{$photographer_id}'");
$photo_grph = mysql_fetch_array($photographer);


$photoq = mysql_query("select * from photo where Photographer_Register_ID='{$photographer_id}'");
if($_POST)
{
    
    $phototitle=$_POST['phototitle'];
    $photodesc=$_POST['photodesc'];
    $photourl= time()."-".$_FILES['photourl']['name'];
    $photographerid=$_SESSION['Photographer_id'];
    $photodatetime= date('Y-m-d h:i:s');
    
    
    
    $q = mysql_query("insert into photo (Photo_Title,Photo_Desc,Photo_URL,Photographer_Register_ID,Photo_Upload_dateandtime,Spam_Count) values('{$phototitle}','{$photodesc}','{$photourl}','{$photographerid}','{$photodatetime}','{$spam}')") or die(mysql_error());
        
    if($q)
    {
        
        move_uploaded_file($_FILES['photourl']['tmp_name'], "admin/pphotos/".$photourl);
              require './admin/alertbox/photo_upload.php';
    }
    
}
?>
<?php 



?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from thunder-team.com/friend-finder/timeline-album.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:50:19 GMT -->
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
<!--    <script>
        function opendialogbox(inputid){
document.getElementById(inputid).click();
}
        </script>-->
    <style>
        .timeline-cover .timeline-nav-bar .profile-info{
  position: absolute;
  text-align: center;
  padding: 0 20px;
 
      top:-129px !important;
  z-index: 999;
  
  
}

    #header
    {
        background: black;
        
    }
    
    .contact-us {
    background: #fff;
    padding: 40px;
    margin-top: -140px;
    border-radius: 4px;
    width: 1100px !important;
    margin-left: -120px !important;
}
    

    </style>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		
                



<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="homepage.php"><img class="logoimg" src="admin/images/wildlife/logo2.png" alt="logo" /></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
                <li class="dropdown"><a href="photographer_homepage.php">Home</a></li>
                <li class="dropdown"><a href="photographer_newsfeed.php">Timeline</a></li>
            
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Event Zone <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                      <li><a href="#">Upcoming Event</a></li>
                    <li><a href="#">Event Registration</a></li>
                    <li><a href="#">Event like</a></li>
                    
                  </ul>
              </li>
              <?php
              if(isset($_SESSION['Photographer_id'])){   
              ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi,&nbsp;<?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?>&nbsp;<span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                      <li><a href="abooutusterms.php">About US</a></li>
                    <li><a href="contactus.php">Contact US</a></li>
                    <li><a href="photographerchangepassword.php">Change Password</a></li>
                  <li><a href="Logout.php">Logout</a></li>                                     
                  </ul>
              </li>
              <?php } ?>
<!--              <ul class="nav navbar-nav navbar-right main-menu">
                  
              </ul>
         
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="Display-Delete-City.php">City</a></li>
                    <li><a href="Display-Delete-State.php">State</a></li>
                    <li><a href="Display-Delete-Country.php">Country</a></li>
                   
                  </ul>
              </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Join US <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                      <li><a href="Display-Delete-PhotographerRegistrationForm.php">As a Photographer</a></li>
                    <li><a href="Display-Delete-UserRegistrationForm.php">As a User</a></li>
              
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact US <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="Display-Delete-Message.php">Your Message</a></li>
                    <li><a href="Display-Delete-Feedback.php">Your Feedback</a></li>
              
                  </ul>
              </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="newsfeed.html">Change Password</a></li>
                    <li><a href="Display-Delete-Feedback.php">Your Feedback</a></li>
                    <li><a href="../Logout.php"></a></li>
                  </ul>
              </li>
         -->
              
              
            
            </ul>
           
          </div>
          <!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
 
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover" style="background:url('admin/pphotos/<?php  echo $photo_grph['Photographer_Cover_Photo'];?>') no-repeat; width:100%; background-size:cover;"

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="admin/photographers/<?php echo $photo_grph['Photographer_Picture']; ?>" alt="" class="img-responsive profile-photo" />
                  <h3><?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?></h3>
                  
                </div>
                  
              </div>
<!--              <div class="col-md-">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Blogs</a></li>
                  <li><a href="timeline-album.html" >Album</a></li>
                  <li><a href="timeline-friends.html">Friends</a></li>
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right main-menu">
       
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="background: black">Hi,<?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?> <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu newsfeed-home" style="background: black;">
                            <li><a href="Display-Delete-Message.php" style="background: black">Change Password</a></li><br>
                            <li><a href="Display-Delete-Feedback.php" style="background: black">Logout</a></li>

                          </ul>
                    </li>
                        </ul>
                     </div>
                </ul>
                <ul class="follow-me list-inline">
                  <li>1,299 people following her</li>
                  <li><button class="btn-primary">Add Friend</button></li>
                </ul>
              </div>-->
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
<!--          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="admin/pphotos/<?php echo $photo_grph['Photographer_Picture']; ?>" alt="" class="img-responsive profile-photo"  />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html">Timeline</a></li>
                <li><a href="timeline-about.html">About</a></li>
                <li><a href="timeline-album.html" class="active">Album</a></li>
                <li><a href="timeline-friends.html">Friends</a></li>
                
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div>Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
              <div class="col-md-3">
                   <ul class="nav-news-feed" style="margin-top:100px;">
                <li><i class="icon ion-ios-paper"></i><div><a href="timeline.php">My Newsfeed</a></div></li>
                <li><i class="icon ion-ios-people"></i><div><a href="photographer_nearby.php">People Nearby</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="#">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="photographer_chatroom.php">Chatroom</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="photographer_upload.php">Images</a></div></li>
              <li><i class="icon ion-ios-videocam"></i><div><a href="#">Videos</a></div></li>
            </ul>
              </div>
            <div class="col-md-7">

              <!-- Photo Album
              ================================================= -->
              <ul class="album-photos" style="margin-left:-510px;">
                  <li>
                  <div id="uploadpic1"  >
                                                                                <!-- <a href="admin/Insert-Photo.php" onClick="javascript:opendialogbox('imageuploadform1');"> -->
                                                                                     <!-- <img src="images/Untitled.png" alt="photo"   style="width: 191px;height: 191px;" /> -->

                                                           <!--                          <form id="uploadpic1" name="form1" action="" method="post"
                                                            enctype="multipart/form-data" target="upload_target1" onChange="this.submit()"
                                                            onsubmit="startUpload();">
                                                                                         <input type="file" id="imageuploadform1" style="display:none" name="uploadimage" />
                                                                           <input type="hidden" name="divid" value="1" />

                                                           </form>-->
                          
  
    	<div class="container">
    		<div class="row">
    			<div class="col-md-10 col-md-offset-1">
           
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                            
                  
                  <form class="contact-form" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                      
                      Photo Title:<input id="contact-name" type="text" name="phototitle" class="form-control" placeholder="Enter Title of Photo*" required="required"  >
                    </div>
                      <div class="form-group">
                      
                      Photo Description:<input id="contact-name" type="text" name="photodesc" class="form-control" placeholder="Enter Description*" required="required"  >
                    </div>
                       <div class="form-group">
                      
                           Photo URL:<input id="contact-name" type="file" class="form-control"  name="photourl" placeholder="Enter Photo URL*" required="required" style="width:100%; background-color:fff !important;">
                    </div>
<!--                        <div class="form-group">
                      
                      Photo URL:<input id="contact-name" type="file"  name="photourl" class="btn-primary" placeholder="Enter Photo URL*" required="required">
                    </div>-->
                         
                       
                      <input type="submit" value="Submit" class="btn-primary"> 
                
                  </form>
                
      
 </div> 
            </div>
          </div>
    		</div>
    	</div>
  





                  </div>  
                       </li>
               <?php
               $id=0;
                               while ($phot_details = mysql_fetch_array($photoq)){
                                   $id++;
               ?>
                  
                  
                <li>
<!--                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-<?php echo $id; ?>">
                      <img src="admin/pphotos/<?php echo $phot_details['Photo_URL']; ?>" alt="photo" style="width: 191px;height: 191px;" />
                  </div>-->
                  <div class="modal fade photo-<?php echo $id; ?>" tabindex="-<?php echo $id; ?>" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="admin/pphotos/<?php echo $phot_details['Photo_URL']; ?>" alt="photo" />
                      </div>
                    </div>
                  </div>
                </li>
                               <?php } ?>
              </ul>
            </div>
            <div class="col-md-2 static">
              <div id="sticky-sidebar">
                <h4 class="grey"><?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?>'s activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link"><?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?></a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link"><?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?></a> Has posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link"><?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?></a> Liked her friend's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link"><?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?></a> has shared an album</p>
                    <p class="text-muted">a day ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
      	<div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href="#"><img src="images/logo-black.png" alt="" class="footer-logo" /></a>
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
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Help</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-3">
              <h6>Contact Us</h6>
                <ul class="contact">
                	<li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
                	<li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
                  <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
                </ul>
            </div>
          </div>
      	</div>
      </div>
      <div class="copyright">
        <p>Thunder Team © 2016. All rights reserved</p>
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
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>

<!-- Mirrored from thunder-team.com/friend-finder/timeline-album.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:58:09 GMT -->
</html>
