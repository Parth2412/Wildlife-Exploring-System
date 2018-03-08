<?php

include '../admin/class/myclass.php';
connection_open();
?>
<center><h1>Wildphy Photography</h1></center>


<hr>


<center><h2>Datewise Event Report</h2></center>

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
    
    Select Date : <select name="eventdesc">
        <option value="0">---Select Date---</option>
        <?php
        while($rdc=  mysql_fetch_row($rq))
        {
            ?>
        <option value='<?php echo $rdc[0]; ?>'>
                       <?php echo $rdc[5]; ?>
        </option>
        <?php
        }
        ?>
        </select>
     <input type="submit" value="Get Details">
</form>

<?php

if($_POST)
{
?>
<table align="center" border="1">
    
    <tr>
        
                             <th > ID</th>
                             <th >Title</th>
                             <th >Description</th>
                             <th >Registration Start's On</th>
                             <th >Registration End's On</th>
                             <th >Event Start's On</th>
                             <th >Event End's On</th>
                             <th >Result's On</th>
    </tr>
    <?php 
    
   $eventdesc=$_POST['eventdesc'];
  $q = mysql_query("select * from event where Event_ID=$eventdesc");
  while($data = mysql_fetch_row($q))
  {
      echo "<tr>";
      echo "<td>$data[0]</td>";
      echo "<td>$data[1] </td>";
      echo "<td style='width:45%;'>$data[2]</td>";
      echo "<td>$data[3]</td>";
      echo "<td>$data[4]</td>";
      echo "<td>$data[5]</td>";
      echo "<td>$data[6]</td>";
      echo "<td>$data[7]</td>";

      
      //echo "<td><a href='../admin/photographers/$data[8]'><img style='width:70px; height:70px;' src='../admin/photographers/$data[8]'></td>";
      echo "</tr>";
  }
    
    
    ?>
</table>
<?php 
}

?>




