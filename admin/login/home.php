<?php
session_start();

echo "Welcome to Website ".$_SESSION['adminname'];
echo "<a href='logout.php'>Logout</a>";
echo "<a href='change-passwpord.php'>Cpass</a>";

if(!isset($_SESSION['adminid']))
{
    header("location:login.php");
}