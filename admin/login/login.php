<?php 
require './class/myclass.php';
session_start();
conneection_open();

if($_POST)
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $q = mysql_query("select * from student where st_email ='{$email}' and st_pass='{$pass}'") or die(mysql_error());
    
    $data = mysql_fetch_row($q);
    
    if($data>0)
    {
        
        $_SESSION['adminid'] = $data[0];
        $_SESSION['adminname'] = $data[1];
        
        header("location:home.php");
    }else
    {
        echo "<script>alert('Login Fail');</script>";
    }
    
    
}


?>


<html>
    
    <body>
        
        <form method="post">
            
            Email : <input type="email" name="email">
            Password :<input type="text" name="pass">
            <input type="submit">
            
            
            
        </form>
    </body>
</html>