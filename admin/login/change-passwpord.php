<?php 
session_start();
//Connection 
mysql_connect("localhost", "root","") or
        die("Error in Connection" . mysql_error());
//Select database
mysql_select_db("akash") or die("Error in DB".  mysql_error());


if(!isset($_SESSION['adminid']))
{
    header("location:login.php");
}

if($_POST)
{
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    $adminid = $_SESSION['adminid'];
    $oldpassq = mysql_query("select st_pass from student where st_id='{$adminid}'") or die(mysql_error());
    $oldpassdatafromdb = mysql_fetch_row($oldpassq);
    
    if($opass==$oldpassdatafromdb[0])
    {
        if($npass==$cpass)
        {
            if($oldpassdatafromdb[0]==$npass)
            {
                      echo "<script>alert('old and New password is Same');</script>";
  
            }else
            {
                
                mysql_query("update student set st_pass='{$npass}' where st_id='{$adminid}'") or die(mysql_error());
                      echo "<script>alert('Done');</script>";
  
                
            }
            
            
        }  else {
                  echo "<script>alert('New and Confirm Pass Not Match');</script>";
  
        }
    }else
    {
        echo "<script>alert('Old Pass Not Match');</script>";
    }
    
    
    
}


?>

<html>
    
    <body>
        
        <form method="post">
            
            
            Old Password : <input type="text" name="opass">
            <br>
            New Password : <input type="text" name="npass">
            <br>
            Confirm Password : <input type="text" name="cpass">
            <br>
            
            <input type="submit">
            
        </form>
    </body>
</html>