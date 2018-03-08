<?php

session_start();


?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<?php 
include './themepart/top-menu.php';
?>

<!-- Grid -->


<!-- END w3-content -->
</div>

<!-- Footer -->


    <?php
include './themepart/footer.php';
?>


<script type='text/javascript' src='//www.w3schools.com/utilcave_com/inc/ezf-min.php?a=a&cb=1&shcb=5' style='display:none;'></script>
</body>
</html>