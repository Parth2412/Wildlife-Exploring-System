<?php

function connection_open()

{
    mysql_connect("localhost", "root", "") or die("Connection Error" .mysql_error());
    mysql_select_db("project") or die("Error in DB Selection " .mysql_error());
    
}

function check_login()
{
    session_start();
    if(!isset($_SESSION['adminid']))
    {
        header("location:Login.php");
    }
}