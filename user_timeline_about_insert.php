<?php
include 'admin/class/myclass.php';
connection_open();
session_start();

$user_id = $_SESSION['User_id'];
$user= mysql_query("select * from user_register where User_Register_ID='{$user_id}'");
$user_grph = mysql_fetch_array($user);

if($_POST)
{
    $personalinfo=$_POST['personalinfo'];
    $workexpr=$_POST['workexperience'];
    $location=$_POST['location'];
    $_languages=$_POST['language'];
        //$q=mysql_query("insert  user_editprofile (User_PersonalInfo,User_WorkExpr,User_Location,User_Languages,User_Register_ID ) values('{$personalinfo}','{$workexpr}','{$location}','{$_languages}','{$user_id}')");
         $q = mysql_query(" update user_edit set City_Name='{$name}',State_ID='{$stateid}' where City_ID='{$cityid}'") 
		or die(mysql_error());
if($q)
{
    header("location:user_timline_about.php");
}
            
}    
    $getdata=  mysql_query("select * from user_editprofile where User_Register_ID='{$user_id}'");
    $fatchrecord= mysql_fetch_array($getdata);
    

?>

<!DOCTYPE html>




<html lang="en">
	
<!-- Mirrored from thunder-team.com/friend-finder/timeline-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:50:15 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>About Me | Learn Detail About Me</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
                <link rel="stylesheet" href="css/style_timeline.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!--Google Webfont-->
		<link href='../../fonts.googleapis.com/csse7ae.css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
<!--		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

           Brand and toggle get grouped for better mobile display 
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" /></a>
          </div>

           Collect the nav links, forms, and other content for toggling 
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="index.html">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="newsfeed.html">Newsfeed</a></li>
                    <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                    <li><a href="newsfeed-friends.html">My friends</a></li>
                    <li><a href="newsfeed-messages.html">Chatroom</a></li>
                    <li><a href="newsfeed-images.html">Images</a></li>
                    <li><a href="newsfeed-videos.html">Videos</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.html">Timeline Album</a></li>
                  <li><a href="timeline-friends.html">Timeline Friends</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="index.html">Landing Page</a></li>
                  <li><a href="newsfeed.html">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.html">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.html">Timeline Album</a></li>
                  <li><a href="timeline-friends.html">Timeline Friends</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="contact.html">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div> /.navbar-collapse 
        </div> /.container 
      </nav>
    </header>-->
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
              <a class="navbar-brand" href="homepage.php" style="margin-top:-15px;"><img class="logoimg" src="admin/images/wildlife/logo2.png" alt="logo" style="width:150px; height:50px;"/></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
                <li class="dropdown"><a href="user_homepage.php">Home</a></li>
              <li class="dropdown"><a href="user_newsfeed.php">Timeline</a></li>
            
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Event Zone <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                      <li><a href="#">Upcoming Event</a></li>
                    <li><a href="#">Event like</a></li>
                  </ul>
              </li>
              <?php
              if(isset($_SESSION['User_id'])){   
              ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi,&nbsp;<?php echo $user_grph['User_Fname']." ".$user_grph['User_Lname'] ; ?>&nbsp;<span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                      <li><a href="abooutusterms.php">About US</a></li>
                    <li><a href="contactus.php">Contact US</a></li>
                    <li><a href="ChangePassword.php">Change Password</a></li>
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
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="admin/photographers/<?php echo $user_grph['User_Picture']; ?>" alt="" class="img-responsive profile-photo" />
                  <h3><?php echo $user_grph['User_Fname'].$user_grph['User_Lname']; ?></h3>
                  
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                    <li><a href="user_timeline.php">Timeline</a></li>
                  <li><a href="user_timeline_about.php"  class="active">About</a></li>
                  <li><a href="user_timeline_album.php">Album</a></li>
                  <li><a href="user_timeline_followers.php">Followers</a></li>
                  <li><a href="user_timeline_following.php">Following</a></li>
                </ul>
<!--                <ul class="follow-me list-inline">
                  <li>1,299 people following her</li>
                  <li><button class="btn-primary">Add Friend</button></li>
                </ul>-->
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
<!--          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
               <img src="admin/photographers/<?php echo $user_main['User_Picture']; ?>" alt="" class="img-responsive profile-photo" />
                  <h3><?php echo $user_main['User_Fname'].$user_main['User_Lname']; ?></h3>
                  
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html">Timeline</a></li>
                <li><a href="timeline-about.html" class="active">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
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
                <li><i class="icon ion-ios-paper"></i><div><a href="user_timeline.php">My Newsfeed</a></div></li>
              <li><i class="icon ion-ios-people"></i><div><a href="user_nearby.php">People Nearby</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="#">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="user_chatroom.php">Chatroom</a></div></li>
              
            </ul> 
              </div>
            <div class="col-md-7">

              <!-- About
              ================================================= -->
              
              <div class="about-profile">
                  <form method="post">
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Personal Information</h4>
<!--                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur</p>-->
                
                  <div class="form-group">
                      <textarea id="contact-name" name="personalinfo" class="form-control"  value="<?php echo $fatchrecord[1];?>" placeholder="Enter Your Persoanl Information" required="required" style="width:90%;"></textarea>    
<!--                    <input id="contact-name" type="textarea" name="personalinfo" class="form-control" placeholder="Enter Your Persona;l Information" required="required"  >-->
                    </div>
                
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Work Experiences</h4>
                  
                  <div class="form-group">
                      <textarea id="contact-name" name="workexperience" class="form-control" value="<?php echo $fatchrecord[2];?>" placeholder="Enter Your Work Experience" required="required" style="width:90%; "></textarea>    
<!--                    <input id="contact-name" type="textarea" name="personalinfo" class="form-control" placeholder="Enter Your Persona;l Information" required="required"  >-->
                    </div>
                  
                             
                  
                  
<!--                  <div class="organization">
                    <img src="images/envato.png" alt="" class="pull-left img-org" />
                    <div class="work-info">
                      <h5>Envato</h5>
                      <p>Seller - <span class="text-grey">1 February 2013 to present</span></p>
                    </div>
                  </div>-->
<!--                  <div class="organization">
                    <img src="images/envato.png" alt="" class="pull-left img-org" />
                    <div class="work-info">
                      <h5>Envato</h5>
                      <p>Seller - <span class="text-grey">1 February 2013 to present</span></p>
                    </div>
                  </div>
                  <div class="organization">
                    <img src="images/envato.png" alt="" class="pull-left img-org" />
                    <div class="work-info">
                      <h5>Envato</h5>
                      <p>Seller - <span class="text-grey">1 February 2013 to present</span></p>
                    </div>
                  </div>-->
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i>Location</h4>
                    <div class="form-group">
<!--                      <textarea id="contact-name" name="workexperience" class="form-control" placeholder="Enter Your Work Experience" required="required" style="width:90%; "></textarea>    -->
                        <input id="contact-name" type="textarea" value="<?php echo $fatchrecord[3];?>" name="location" class="form-control" placeholder="Enter Your location" required="required" style="width:90%;"  >
                    </div>
                  <div class="google-maps">
                      
                      <div id="map" class="map" style="url('https://www.google.com/maps/search/<?php ;?>/@13z/data=!3m1!4b1');">
                          
                      </div>
                  </div>
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-heart-outline icon-in-title"></i>Interests</h4>
                  <ul class="interests list-inline">
                    <li><span class="int-icons" title="Bycycle riding"><i class="icon ion-android-bicycle"></i></span></li>
                    <li><span class="int-icons" title="Photography"><i class="icon ion-ios-camera"></i></span></li>
                    <li><span class="int-icons" title="Shopping"><i class="icon ion-android-cart"></i></span></li>
                    <li><span class="int-icons" title="Traveling"><i class="icon ion-android-plane"></i></span></li>
                    <li><span class="int-icons" title="Eating"><i class="icon ion-android-restaurant"></i></span></li>
                  </ul>
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-chatbubble-outline icon-in-title"></i>Language</h4>
                    <ul>
                        <div class="form-group">
<!--                      <textarea id="contact-name" name="workexperience" class="form-control" placeholder="Enter Your Work Experience" required="required" style="width:90%; "></textarea>    -->
                        <input id="contact-name" type="textarea" value="<?php echo $fatchrecord[4];?>" name="language" class="form-control" placeholder="Enter Languages Yoou Know" required="required" style="width:90%;"  >
                    </div>                    
                    </ul>
                </div>
                  <input type="submit" value="Save" class="btn-primary " style="float:right; margin-right:10%;"> 
                 </form>
              </div>
              
            </div>
            <div class="col-md-2 static">
                         <div id="sticky-sidebar">
                <h4 class="grey"><?php echo $user_grph['User_Fname'].$user_grph['User_Lname']; ?>'s activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link"><?php echo $user_grph['User_Fname'].$user_grph['User_Lname']; ?></a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link"><?php echo $user_grph['User_Fname'].$user_grph['User_Lname']; ?></a> Has posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link"><?php echo $user_grph['User_Fname'].$user_grph['User_Lname']; ?></a> Liked her friend's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link"><?php echo $user_grph['User_Fname'].$user_grph['User_Lname']; ?></a> has shared an album</p>
                    <p class="text-muted">a day ago</p>
                  </div>
                </div>
              </div>
<!--              <div id="sticky-sidebar">
                <h4 class="grey">Sarah's activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                    <p class="text-muted">a day ago</p>
                  </div>
                </div>
              </div>-->
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
    
  </body>

<!-- Mirrored from thunder-team.com/friend-finder/timeline-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:50:19 GMT -->
</html>
