<?php

include '../admin/class/myclass.php';
connection_open();
?>

<center><h1>Wildphy Photography</h1></center>

<center><h2>Eventwise Photographer Report</h2></center>

<head>
    
    <style>
        
       table {
    border-collapse: collapse;
    width: 100%;
}

th{
    text-align: Center;
    
   font-size: 20px;
 
 
    
}
td{
    font-size: 25px; 
    
    text-align: center;
}

tr:nth-child(even){background-color: #f2f2f2}  
        
        </style>
        
</head>
<b><h3><?php echo "Date : ".  date("d-m-Y"); ?></h3><b>

<?php
$rq=  mysql_query("Select * from event")
?>
<form method="post">
    
    Select Event : <select name="event">
        <option value="0">---Select Event---</option>
        <?php
        while($rd=  mysql_fetch_row($rq))
        {
            ?>
        <option value='<?php echo $rd[0]; ?>'>
                       <?php echo $rd[1]; ?>
        </option>
        <?php
        }
        ?>
           <input type="submit" value="Get Details">
        </select>
</form>
<?php 

if($_POST)
{
 


    ?>
<table align="center" border="1">
    
    <tr>
        
                             <th > ID</th>
                             <th >Name</th>
                             <th >Gender</th>
                             <th >Birthdate</th>
                             <th >City</th>
                             <th >Email</th>
                             <th >Mobile No</th>
                             <th >Picture</th>
    </tr>
    <?php 
    
   $event=$_POST['event'];
  $q = mysql_query("SELECT
    `photographer_register`.`Photographer_Register_ID`
    , `photographer_register`.`Photographer_Fname`
    , `photographer_register`.`Photographer_Lname`
    , `photographer_register`.`Photographer_Gender`
    , `photographer_register`.`Photographer_Birthdate`
    , `photographer_register`.`Photographer_City`
    , `photographer_register`.`Photographer_Email`
    , `photographer_register`.`Photographer_Mobile`
    , `photographer_register`.`Photographer_Picture`
FROM
    `photographer_register`,`event_registration` e  where `photographer_register`.`Photographer_Register_ID` = e.`Photographer_Register_ID` and e.Event_ID='$event'") or die(mysql_error());
    
  
  while($data = mysql_fetch_row($q))
  {
      echo "<tr>";
      echo "<td>$data[0]</td>";
      echo "<td>$data[1] $data[2]</td>";
      echo "<td>$data[3]</td>";
      echo "<td>$data[4]</td>";
      echo "<td>$data[5]</td>";
      echo "<td>$data[6]</td>";
      echo "<td>$data[7]</td>";
      
      echo "<td><a href='../admin/photographers/$data[8]'><img style='width:70px; height:70px;' src='../admin/photographers/$data[8]'></td>";
      echo "</tr>";
  }
    
    
    ?>
</table>
<?php 
}

?>

