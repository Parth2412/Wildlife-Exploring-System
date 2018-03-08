<?php 
include 'admin/class/myclass.php';
connection_open();
session_start();

$photographer_id = $_SESSION['Photographer_id'];

$photographer = mysql_query("select * from photographer_register where Photographer_Register_ID='{$photographer_id}'");
$photo_grph = mysql_fetch_array($photographer);


$photoq = mysql_query("select * from photo where Photographer_Register_ID='{$photographer_id}'");
$followinguser=  mysql_query("select *from follow f,user_register u where f.user_following_id=u.user_register_id and f.photographer_register_id='$photographer_id'");
$followingphotographer= mysql_query("select *from follow f,photographer_register u where f.photographer_following_id=u.photographer_register_id and f.photographer_register_id='$photographer_id'");

?>


<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from thunder-team.com/friend-finder/timeline-friends.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:58:09 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>My Friends | Friend Finder Friend List</title>

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
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                    <li><a href="timeline.php">Timeline</a></li>
                    <li><a href="photographer_timeline_about.php">About</a></li>
                    <li><a href="photographer_timeline_album.php">Album</a></li>
                  <li><a href="photographer_timeline_followers.php">Followers</a></li>
                  <li><a href="photographer_timeline_following.php" class="active">Following</a></li>
                </ul>
                
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
             <img src="admin/photographers/<?php echo $photo_grph['Photographer_Picture']; ?>" alt="" class="img-responsive profile-photo" />
                  <h3><?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?></h3>
                  
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.php">Timeline</a></li>
                <li><a href="photographer_timeline_about.php">About</a></li>
                <li><a href="photographer_timeline_album.php">Album</a></li>
                  <li><a href="photographer_timeline_followers.php">Followers</a></li>
                  <li><a href="photographer_timeline_following.php" class="active">Following</a></li>
              </ul>
              
            </div>
          </div><!--Timeline Menu for Small Screens End-->

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

              <!-- Friend List
              ================================================= -->
              <div class="friend-list">
                <div class="row">
                    <?php
                     while($followingdata=  mysql_fetch_row($followinguser))
              {
                    
                    
                    ?>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/1.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="admin/photographers/<?php echo $followingdata[14] ;?>" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link"><?php echo  $followingdata[6]." ".$followingdata[7] ; ?></a></h5>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                    <?php
              }
                    ?>
                    
                    
                    
                        <?php 
              while($followersdata=  mysql_fetch_row($followingphotographer))
              {
              ?>
                    <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/1.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                          <img src="admin/photographers/<?php echo $followersdata[14] ;?>" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          
                          <h5><a href="timeline.html" class="profile-link"><?php echo  $followersdata[6]." ".$followersdata[7] ; ?></a></h5>
                          <p>Photographer</p>
                         
                        </div>
                      </div>
                    </div>
                        </div>
                      <?php
                      
              }
                      ?>
<!--                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/3.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-4.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">John Doe</a></h5>
                          <p>Traveler</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/4.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-10.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="timeline.html" class="pull-right text-green">My Friend</a>
                          <h5><a href="#" class="profile-link">Julia Cox</a></h5>
                          <p>Art Designer</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/5.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-7.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timelime.html" class="profile-link">Robert Cook</a></h5>
                          <p>Photographer at Photography</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/6.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-8.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">Richard Bell</a></h5>
                          <p>Graphic Designer at Envato</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/7.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-2.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">Linda Lohan</a></h5>
                          <p>Software Engineer</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/8.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-9.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">Anna Young</a></h5>
                          <p>Musician</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/9.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-6.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">James Carter</a></h5>
                          <p>CEO at IT Farm</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <img src="images/covers/10.jpg" alt="profile-cover" class="img-responsive cover" />
                      <div class="card-info">
                        <img src="images/users/user-5.jpg" alt="user" class="profile-photo-lg" />
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green">My Friend</a>
                          <h5><a href="timeline.html" class="profile-link">Alexis Clark</a></h5>
                          <p>Traveler</p>
                        </div>
                      </div>
                    </div>
                  </div>-->
                </div>
              </div>
            </div>
            <div class="col-md-2 static">
              <div id="sticky-sidebar">
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

<!-- Mirrored from thunder-team.com/friend-finder/timeline-friends.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:58:09 GMT -->
</html>
