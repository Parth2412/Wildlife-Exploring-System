<?php

include 'admin/class/myclass.php';
connection_open();
session_start();
$photographer_id = $_SESSION['Photographer_id'];
 
$photographer = mysql_query("select * from photographer_register where Photographer_Register_ID='{$photographer_id}'");
$photo_grph = mysql_fetch_array($photographer);


?>






<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from thunder-team.com/friend-finder/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:48:22 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>My Timeline | This is My Coolest Profile</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
                <link rel="stylesheet" href="css/style_timeline.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
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
                    <li><a href="timeline.php" class="active">Timeline</a></li>
                  <li><a href="photographer_timeline_about.php">About</a></li>
                  <li><a href="photographer_timeline_album.php">Album</a></li>
                  <li><a href="photographer_timeline_followers.php">Followers</a></li>
                  <li><a href="photographer_timeline_following.php">Following</a></li>
                </ul>
<!--                <ul class="follow-me list-inline">
                  <li>1,299 people following her</li>
                  <li><button class="btn-primary">Add Friend</button></li>
                </ul>-->
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
                <li><a href="timline.html" class="active">Timeline</a></li>
                <li><a href="photographer_timeline_about.php">About</a></li>
                <li><a href="photographer_timeline_album.php">Album</a></li>
                <li><a href="photographer_timeline_friends.php">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Post Create Box
              ================================================= -->
              <div class="create-post">
<!--                <div class="row">
                  <div class="col-md-7 col-sm-7">
                    <div class="form-group">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-md" />
                      <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                    </div>
                  </div>
                  <div class="col-md-5 col-sm-5">
                    <div class="tools">
                      <ul class="publishing-tools list-inline">
                        <li><a href="#"><i class="ion-compose"></i></a></li>
                        <li><a href="#"><i class="ion-images"></i></a></li>
                        <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                        <li><a href="#"><i class="ion-map"></i></a></li>
                      </ul>
                      <button class="btn btn-primary pull-right">Publish</button>
                    </div>
                  </div>
                </div>-->
              </div><!-- Post Create Box End-->

              <!-- Post Content
              ================================================= -->
              
              
<!--              <div class="post-content">

                Post Date
                <div class="post-date hidden-xs hidden-sm">
                  <h5><?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?></h5>
                  <p class="text-grey">Sometimes ago</p>
                </div>Post Date End

                <img src="images/post-images/12.jpg" alt="post-image" class="img-responsive post-image" />
                <div class="post-container">
                  <img src="images/users/user-1.jpg" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link">Sarah Cruiz</a> <span class="following">following</span></h5>
                      <p class="text-muted">Published a photo about 15 mins ago</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>-->


<!--<div class="post-date hidden-xs hidden-sm">
                  <h5>
                      <?php //echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?>
</h5>
                  <p class="text-grey">Sometimes ago</p>
                </div>-->

 <?php 
            
            $getallphotosq = mysql_query("select * from photo where Photographer_Register_ID={$photographer_id} order by Photo_ID desc") or die(mysql_error());
            
            while($photodata = mysql_fetch_row($getallphotosq)) 
            {
                
                $userq = mysql_query("select * from photographer_register where Photographer_Register_ID ='{$photodata[4]}'") or die(mysql_error());
               $userdata = mysql_fetch_row($userq);
                
               $photolikequery = mysql_query("select * from  photo_like where Photo_ID = '{$photodata[0]}'") or die(mysql_error());
                $photolikedata = mysql_fetch_row($photolikequery) ;
                
               $likecount = mysql_num_rows($photolikequery);
                
                if($likecount<1)
               {
                  $likec = 0;
               }
                
               else
               {
                 $likec = $likecount;
               }
                echo "     <div class='post-content'>
                    <div class='post-date hidden-xs hidden-sm'>
                    <h5> 
                    $photo_grph[1] $photo_grph[2]
                    </h5>
                     <p class='text-grey'>$photodata[5]</p>
                    </div>
              <img src='admin/pphotos/$photodata[3]' alt='' class='img-responsive post-image' />
              <div class='post-container'>
                <img src='admin/photographers/$userdata[9]' alt='user' class='profile-photo-md pull-left' />
                <div class='post-detail'>
                  <div class='user-info'>
                    <h5><a href='timeline.html' class='profile-link'>$userdata[1] $userdata[2]</a> <span class='following'>following</span></h5>
                    <p class='text-muted'>Published a photo </p>
                  </div>
                  <div class='reaction'>
                    <a class='btn text-green' href='?photoid=$photodata[0]&action=like'><i class='icon ion-thumbsup'></i> $likec</a>
              
                  </div>
                  
                  <div class='line-divider'></div>
                  <div class='post-text'>
                    <p><h3>$photodata[1]</h3>
                         $photodata[2] </p>
                  </div>
                 ";
                
                
                $getcommentq = mysql_query("select * from photo_comment where Photo_ID ='{$photodata[0]}'")  or die(mysql_error());
                
                $countcomment = mysql_num_rows($getcommentq);
                
                if($countcomment>0)
                {
                        while($commentsdata = mysql_fetch_row($getcommentq))
                        {
                            if($commentsdata[5]==0)
                            {
                              $userqcom = mysql_query("select * from photographer_register where Photographer_Register_ID ='{$commentsdata[3]}'") or die(mysql_error());
                             $userdatacom = mysql_fetch_row($userqcom);
            
                            echo" <div class='line-divider'></div>
                          <div class='post-comment'>
                            <img src='admin/photographers/{$userdatacom[9]}' alt='' class='profile-photo-sm' />
                            <p><a href='timeline.html' class='profile-link'>$userdatacom[1] $userdatacom[2] </a> $commentsdata[2]</p>
                          </div>
                          ";
                            }
                            else
                            {
                              $userqcom = mysql_query("select * from user_register where User_Register_ID ='{$commentsdata[5]}'") or die(mysql_error());
                             $userdatacom = mysql_fetch_row($userqcom);
            
                            echo" <div class='line-divider'></div>
                          <div class='post-comment'>
                            <img src='admin/photographers/{$userdatacom[9]}' alt='' class='profile-photo-sm' />
                            <p><a href='timeline.html' class='profile-link'>$userdatacom[1] $userdatacom[2] </a> $commentsdata[2]</p>
                          </div>
                          ";    
                            }
                        }
                }
              
//                echo "<form method='post'><div class='post-comment'>
//                    <input type='hidden' value='$photodata[0]' name='pid'>
//                    <img src='admin/photographers/$photo_grph[Photographer_Picture]' alt='' class='profile-photo-sm' />
//                    <input type='text' class='form-control' name='comment' placeholder='Post a comment'>
//                    <input type='submit' class='btn-primary' style='padding: 0px 31px;'>
//                  </div></form>";
                echo "
                </div>
              </div>
            </div>
     ";
            }
            
            
            ?>
                        
                        
                        














<!--               Post Content
              ================================================= 
              <div class="post-content">

                Post Date
                <div class="post-date hidden-xs hidden-sm">
                  <h5>Sarah</h5>
                  <p class="text-grey">10/22/2016</p>
                </div>Post Date End

                <img src="images/post-images/13.jpg" alt="post-image" class="img-responsive post-image" />
                <div class="post-container">
                  <img src="images/users/user-1.jpg" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link">Sarah Cruiz</a> <span class="following">following</span></h5>
                      <p class="text-muted">Yesterday</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 49</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>

               Post Content
              ================================================= 
              <div class="post-content">

                Post Date
                <div class="post-date hidden-xs hidden-sm">
                  <h5>Sarah</h5>
                  <p class="text-grey">10/21/2016</p>
                </div>Post Date End

                <div class="post-container">
                  <img src="images/users/user-1.jpg" alt="user" class="profile-photo-md pull-left" />
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="timeline.html" class="profile-link">Sarah Cruiz</a> <span class="following">following</span></h5>
                      <p class="text-muted">2 days ago</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 49</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                      <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>-->

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

<!-- Mirrored from thunder-team.com/friend-finder/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:50:15 GMT -->
</html>
