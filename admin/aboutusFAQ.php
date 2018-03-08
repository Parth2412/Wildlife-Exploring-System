<?php

session_start();


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

    <!-- Header
    ================================================= -->
		<?php
                include './themepart/top-menu.php';
                ?>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-0">
                <div class="profile-info">
                  
                  <h3>About US</h3>
                  
                </div>
              </div>
      
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- About
              ================================================= -->
              <div class="about-profile">
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>FAQ</h4>
                  <p style='text-align: justify;'>

This is a short list of our most frequently asked questions. For more information about Instagram, or if you need support, please visit our support center.

<br><br><b>What is Instagram?</b><br><br>

Instagram is a fun and quirky way to share your life with friends through a series of pictures. Snap a photo with your mobile phone, then choose a filter to transform the image into a memory to keep around forever. We're building Instagram to allow you to experience moments in your friends' lives through pictures as they happen. We imagine a world more connected through photos.

<br><br><b>How much is your app?</b><br><br>

$0.00 - available for free in the Apple App Store and Google Play store.

<br><br><b>Where does the name come from?</b><br><br>

When we were kids we loved playing around with cameras. We loved how different types of old cameras marketed themselves as "instant" - something we take for granted today. We also felt that the snapshots people were taking were kind of like telegrams in that they got sent over the wire to others - so we figured why not combine the two?

<br><br><b>How did the idea come about?</b><br><br>

We love taking photos. We always assumed taking interesting photos required a big bulky camera and a couple years of art school. But as mobile phone cameras got better and better, we decided to challenge that assumption. We created Instagram to solve three simple problems:

Mobile photos always come out looking mediocre. Our awesome looking filters transform your photos into professional-looking snapshots.
Sharing on multiple platforms is a pain - we help you take a picture once, then share it (instantly) on multiple services.
Most uploading experiences are clumsy and take forever - we've optimized the experience to be fast and efficient.
What other services are you compatible with?

Currently, you can share your photos on a photo-by-photo basis on Flickr, Facebook, and Twitter. Additionally, if you specify a location with your photo, you can opt to have us check you in on Foursquare. Going forward, we plan on supporting additional services but have nothing else to announce at this time.

<br><br><b>Are you hiring?</b><br><br>

Absolutely, yes. If you're a talented engineer or designer we want to talk to you. Check out our jobs page.

I have a technical problem or support issue I need resolved, who do I email?

The best way to get in touch with us is to visit our support center.

Is there an API or developer program?

Developers can register for our api at our developer site.

<br><br><b>How does privacy work?</b><br><br>

We have adopted a follower model that means if you're "public" on Instagram, anyone can subscribe to follow your photos. We do, however, have a special private option. In this mode, a user can make sure he/she must approve all follow requests before they go through.

<br><br><b>Who can see my photos?</b><br><br>

All photos are public by default which means they are visible to anyone using Instagram or on the instagram.com website. If you choose to make your account private, then only people who follow you on Instagram will be able to see your photos.

<br><br><b>How can I print my photos?</b><br><br>

We save all the photos you process with Instagram to your camera roll. You can then sync with your computer and print as many as you'd like.

<br><br><b>When are you going to make the app for Blackberry, Windows Phone 7, iPad, etc?</b><br><br>

We are currently working on making the iPhone and Android experiences as solid as possible. Only then will we consider other platforms, but currently we have nothing to announce.</p>
                </div>
               
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i>Location</h4>
                  <p>Xavier Institute of Computer Application, India</p>
                  <div class="google-maps">
                    <div id="map" class="map"></div>
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
              
              </div>
            </div>
            <div class="col-md-2 static">
              <div id="sticky-sidebar">
                <h4 class="grey">About & Legal</h4>
                <div class="feed-item">
                  <div class="live-activity">
                      <p><a href="aboutuscompany.php" class="profile-link">Company</a></p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                      <p><a href="aboutusjobs.php" class="profile-link">Jobs</a></p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                      <p><a href="aboutusFAQ.php" class="profile-link">FAQ</a> </p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                      <p><a href="abooutusterms.php" class="profile-link">Terms</a></p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                      <p><a href="aboutusprivacy.php" class="profile-link">Privacy</a></p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                      <p><a href="aboutusplatform.php" class="profile-link">Platform</a></p>
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
    
  </body>

<!-- Mirrored from thunder-team.com/friend-finder/timeline-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:50:19 GMT -->
</html>
