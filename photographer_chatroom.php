<?php
  include 'admin/class/myclass.php';
connection_open();
session_start();
$photographer_id = $_SESSION['Photographer_id'];
$photographer = mysql_query("select * from photographer_register where Photographer_Register_ID='{$photographer_id}'");
$photo_grph = mysql_fetch_array($photographer);
$check=mysql_query("select * from follow where Photographer_Following_ID='$photographer_id'");
$final=0;
while($rdcheck=  mysql_fetch_row($check))
{
    $final=$final+1;
}

?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from thunder-team.com/friend-finder/newsfeed-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:15:46 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Chatroom | Send and Receive Messages</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery.scrollbar.css" />
		<link rel="stylesheet" href="css/style.css" />
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

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
             <div class="profile-card">
            	<img src="admin/photographers/<?php echo $photo_grph['Photographer_Picture']; ?>" alt="user" class="profile-photo" />
            	<h5><a href="timeline.html" class="text-white"><?php echo $photo_grph['Photographer_Fname'].$photo_grph['Photographer_Lname']; ?></a></h5>
            	<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> <?php echo $final ;?> followers</a>
            </div><!--profile card ends-->
           <ul class="nav-news-feed">
               <li><i class="icon ion-ios-paper"></i><div><a href="timeline.php">My Newsfeed</a></div></li>
                <li><i class="icon ion-ios-people"></i><div><a href="photographer_nearby.php">People Nearby</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="#">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="photographer_chatroom.php">Chatroom</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="photographer_upload.php">Images</a></div></li>
              <li><i class="icon ion-ios-videocam"></i><div><a href="#">Videos</a></div></li>
            </ul><!--news-feed links ends-->
            <div id="chat-block">
              <div class="title">Chat online</div>
              <ul class="online-users list-inline">
                  <?php
                     
                         $chatid=0;
                         $chatuser="";
       $rsonline= mysql_query("select *from follow  where Photographer_Following_ID='$photographer_id'");
                            while($rdonline=mysql_fetch_row($rsonline))
                            {
                                
                               if($rdonline[3]=='0')
                               {
                                   $rsphotographer=  mysql_query("select *from photographer_register where Photographer_Register_ID='$rdonline[4]'");
                                    
                                   $data=  mysql_fetch_row($rsphotographer);
                                     $chatid=$data[0];
                                     $chatuser="p";
                                   ?>
                <li><a href="?recid=<?php echo $data[0]; ?>&type=p" title="Linda Lohan"><img src="admin/photographers/<?php echo $data[9]; ?>" alt="user" class="img-responsive profile-photo" />
                                             <?php
                           if($data[10]=="yes")
                           {
                         ?>
                        <span class="online-dot"></span>
                        <?php
                               }
                        ?>
    
                    </a></li>
                 <?php
                                   
                               }
                               else
                               {
                                    $rsuser=  mysql_query("select *from user_register where User_Register_ID='$rdonline[3]'");
                                     $data=  mysql_fetch_row($rsuser);
                                    $chatid=$data[0];
                                     $chatuser="u";
                                
                                     
                  ?>
                <li><a href="?recid=<?php echo $data[0]; ?>&type=u" title="Linda Lohan"><img src="admin/photographers/<?php echo $data[9]; ?>" alt="user" class="img-responsive profile-photo" />
                                             <?php
                           if($data[10]=="yes")
                           {
                         ?>
                        <span class="online-dot"></span>
                        <?php
                               }
                        ?>

                    </a></li>
                 <?php
                                   
                               }
                                
                            }
                            
                            
                            
       $rsonline= mysql_query("select *from follow  where Photographer_Register_ID='$photographer_id'");
                     
       
          while($rdonline=mysql_fetch_row($rsonline))
                            {
                                
                               if($rdonline[1]=='0')
                               {
                                   $rsphotographer=  mysql_query("select *from photographer_register where Photographer_Register_ID='$rdonline[2]'");
                                     $data=  mysql_fetch_row($rsphotographer);
                                        $chatid=$data[0];
                                     $chatuser="p";
                                
                                     ?>
                <li><a href="?recid=<?php echo $data[0]; ?>&type=p" title="Linda Lohan"><img src="admin/photographers/<?php echo $data[9]; ?>" alt="user" class="img-responsive profile-photo" />
                         <?php
                           if($data[10]=="yes")
                           {
                         ?>
                        <span class="online-dot"></span>
                        <?php
                               }
                        ?>
                    </a></li>
                 <?php
                                   
                               }
                               else
                               {
                                    $rsuser=  mysql_query("select *from user_register where User_Register_ID='$rdonline[1]'");
                                     $data=  mysql_fetch_row($rsuser);
                                         $chatid=$data[0];
                                     $chatuser="u";
                                
                  ?>
                <li><a href="?recid=<?php echo $data[0]; ?>&type=u" title="Linda Lohan"><img src="admin/photographers/<?php echo $data[9]; ?>" alt="user" class="img-responsive profile-photo" />
                    
                                             <?php
                           if($data[10]=="yes")
                           {
                         ?>
                        <span class="online-dot"></span>
                        <?php
                               }
                        ?>

                    </a></li>
                 <?php
                                   
                               }
                                
                            }
                         
       
                 ?>
              </ul>
            </div><!--chat block ends-->
          </div>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
<!--            <div class="create-post">
            	<div class="row">
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
            	</div>
            </div> Post Create Box End -->

            <!-- Chat Room
            ================================================= -->
            <div class="chat-room">
              <div  class="row">
                <div class="col-md-5">

                  <!-- Contact List in Left--> 
                   <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
                
                
                    
                    <li>
                      <a href="#contact-2" data-toggle="tab">
                        <div class="contact" style="margin-top:-19px;">
                        <?php
                        
                           if(isset($_GET["recid"]))
                           {
                               if($_GET["type"]=="p")
                               {
                                   
                                   $currentchatuser=  mysql_query("select *from photographer_register where Photographer_Register_ID='".$_GET["recid"]."'");
                                   
                                   }
                               else
                               {
                                $currentchatuser=  mysql_query("select *From user_register where User_Register_ID='".$_GET["recid"]."'");
                                   
                               }
                               $currentchatuserdata=mysql_fetch_row($currentchatuser);
                               
                             ?>
                            <img src="admin/photographers/<?php echo $currentchatuserdata[9]; ?>" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6><?php echo $currentchatuserdata[1]." ".$currentchatuserdata[2]; ?></h6>
                            <p class="text-muted">see you soon</p>
                            <small class="text-muted">an hour ago</small>
                            <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                          </div>
                          
                            <?php
                               
                           }
                           else
                           {
                               if($chatid==0)
                               {
                                   
                               }
                               else
                               {
                                    
                                   if($chatuser=="p")
                                   {
                                       $currentchatuser=  mysql_query("select *from photographer_register where Photographer_Register_ID='".$chatid."'");
                                   
                                   }
                               else
                               {
                                $currentchatuser=  mysql_query("select *From user_register where User_Register_ID='".$chatid."'");
                                   
                               }
                               $currentchatuserdata=mysql_fetch_row($currentchatuser);
                               
                                   
                                   ?>
                          
                            <img src="admin/photographers/<?php echo $currentchatuserdata[9]; ?>" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6><?php echo $currentchatuserdata[1]." ".$currentchatuserdata[2]; ?></h6>
                            <p class="text-muted">see you soon</p>
                            <small class="text-muted">an hour ago</small>
                            <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                          </div>
                          
                            <?php
                               }
                           }
                               
                        ?>
                            
                          
                          </div>
                      </a>
                    </li>
<!--                    <li>
                      <a href="#contact-3" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Sophia Lee</h6>
                            <p class="text-muted">Okay fine. thank you</p>
                            <small class="text-muted">13 hour ago</small>
                            <div class="replied"><i class="icon ion-reply"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-4" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>John Doe</h6>
                        		<p class="text-muted">hey anybody there</p>
                            <small class="text-muted">Yesterday</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-5" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Anna Young</h6>
                            <p class="text-muted">I gotta go</p>
                            <small class="text-muted">2 days ago</small>
                            <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-6" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>Richard Bell</h6>
                        		<p class="text-muted">Hey there?</p>
                            <small class="text-muted">2 days ago</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>-->
                  </ul>
<!-- Contact List in Left End -->

                </div>
                <div class="col-md-7">

                  <!--Chat Messages in Right-->
                  <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
                    <div class="tab-pane active" id="contact-1">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      	
                            <?php
                                if(isset($_GET["recid"]))
                                {
                                     if($_GET["type"]=="u")
                                     {
                                $rsmessages=  mysql_query("select *from message where (Send_Photographer_Register_ID='$photographer_id' and  User_Register_ID='".$_GET["recid"]."')or (Photographer_Register_ID='$photographer_id' and Send_User_Register_ID='".$_GET["recid"]."')");
                                     }
                                     else
                                     {
                                $rsmessages=  mysql_query("select *from message where (Send_Photographer_Register_ID='$photographer_id' and  Photographer_Register_ID='".$_GET["recid"]."')or (Photographer_Register_ID='$photographer_id' and Send_Photographer_Register_ID='".$_GET["recid"]."')");
                                         
                                     }
                                        while($rdmessages=  mysql_fetch_row($rsmessages))
                                        {
                                            
                                           if($rdmessages[4]==0)
                                          {
                                     ?>
                            
                                  <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted"></small>
                              </div>
                              <p><?php echo $rdmessages[1]; ?></p>
                            </div>
                      		</li>
                            
                                
                                          <?php
                                          }
                                          else
                                          {
                                              
                                         ?>        
                                <li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p><?php echo $rdmessages[1]; ?></p>
                            </div>
                      		</li>
                                      
                              
                                   <?php
                                          }
                      
                                            
                                        }
                                }
                                else
                                {
                                   if($chatid==0)
                                   {
                                       
                                   }
                                   else
                           
                                   {
                                     if($chatuser=="u")
                                     {
                                $rsmessages=  mysql_query("select *from message where (Send_Photographer_Register_ID='$photographer_id' and  User_Register_ID='".$chatid."')or (Photographer_Register_ID='$photographer_id' and Send_User_Register_ID='".$chatid."')");
                                     }
                                     else
                                     {
                                $rsmessages=  mysql_query("select *from message where (Send_Photographer_Register_ID='$photographer_id' and  Photographer_Register_ID='".$chatid."')or (Photographer_Register_ID='$photographer_id' and Send_Photographer_Register_ID='".$chatid."')");
                                         
                                     }
                                     while($rdmessages=  mysql_fetch_row($rsmessages))
                                        {
                                          if($rdmessages[4]==0)
                                          {
                                     ?>
                            
                                  <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted"></small>
                              </div>
                              <p><?php echo $rdmessages[1]; ?></p>
                            </div>
                      		</li>
                            
                                
                                          <?php
                                          }
                                          else
                                          {
                                              
                                         ?>        
                                <li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p><?php echo $rdmessages[1]; ?></p>
                            </div>
                      		</li>
                                      
                              
                                   <?php
                                          }
                                        }   
                                   }
                                }
                                
                                 
                                ?>
                           	</ul>
                      </div>
                    </div>
                   
                  </div><!--Chat Messages in Right End-->

                  <?php
                     if(isset($_POST["recid"]))
                     {
                         $dt=date('Y-m-d');
                         if($_POST["type"]=="u")
                         {
                         mysql_query("insert into message(Message_Desc,Message_Date,User_Register_ID,Photographer_Register_ID,Send_User_Register_ID,Send_Photographer_Register_ID)"
                                 . " values('".$_POST["msg"]."','$dt','".$_POST["recid"]."','0','0','$photographer_id')");
                         }
                         else
                         {
                         mysql_query("insert into message(Message_Desc,Message_Date,User_Register_ID,Photographer_Register_ID,Send_User_Register_ID,Send_Photographer_Register_ID)"
                                 . " values('".$_POST["msg"]."','$dt','0','".$_POST["recid"]."','0','$photographer_id')");
                             
                         }
                     }
                         
                  ?>
                  
                  <div class="send-message">
                    <div class="input-group">
                        <form  method="post">
                         <?php
                         
                           if(isset($_GET["recid"]))
                           {
                               ?>
                            <input type="hidden" value='<?php echo $_GET["recid"]; ?>' name="recid">
                            <input type="hidden" value='<?php echo $_GET["type"]; ?>' name="type">
                            
                            <?php
                           }
                           else
                           {
                               if($chatid!=0)
                               {
                                 ?>
                            <input type="hidden" value='<?php echo $chatid; ?>' name="recid">
                            <input type="hidden" value='<?php echo $chatuser; ?>' name="type">
                            
                            <?php  
                                   
                               }
                               
                              
                           }
                         ?>
                            <input type="text" class="form-control" name="msg" placeholder="Type your message">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Send</button>
                      </span>
                        </form>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

    			<!-- Newsfeed Common Side Bar Right
          ================================================= -->
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

<!-- Mirrored from thunder-team.com/friend-finder/newsfeed-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 07:15:47 GMT -->
</html>
