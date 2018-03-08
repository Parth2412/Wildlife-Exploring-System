<?php
mysql_connect("localhost", "root", "") or 
        die("Error in Connection ".mysql_error());
mysql_select_db("ketan") or die("Error in DB" . mysql_error());

if($_POST)
{
    $email = $_POST['txt1'];
  
    
    $q = mysql_query("select * from student where st_email='{$email}' ") or die(mysql_error());
   $data = mysql_fetch_row($q);
    if($data>0)
   {
        //IF Email ID is Present Then Send Mail 
        

        require 'PHPMailerAutoload.php';

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'yourgmailid@gmail.com';                 // SMTP username
        $mail->Password = 'yourgmailpassword';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('sap.cambay@gmail.com', 'Spa');
        $mail->addAddress($email, $email);     // Add a recipient

        $mail->addReplyTo('info@example.com', 'Information');
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Forgot Password .';
        $mail->Body    = "Hi $email Your Password is $data[5]";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Your Password is Sent on Email ID';
        }

        
        
        
        
   }else
   {
       echo "<script>alert('Email Not Found');</script>";
   }
 }
 
?>

<html>
    <body>
        <form method="post">
            
            Email :<input type="text" name="txt1">
            <input type="submit">
            
        </form>
    </body>
        
</html>
