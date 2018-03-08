<?php
session_start();
include 'admin/class/myclass.php';
connection_open();

if($_SESSION["type"]=="p")
{
    $id=$_SESSION["Photographer_id"];

                mysql_query("update photographer_register set IsOnline='no' where Photographer_Register_ID='{$id}'");

}
else
{
    $id=$_SESSION["User_id"];
                mysql_query("update user_register set IsOnline='no' where User_Register_ID='{$id}'");

}
session_destroy();

header("location:Login.php");

?>