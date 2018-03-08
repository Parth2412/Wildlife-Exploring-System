<?php

include '../admin/class/myclass.php';
connection_open();
?>

<center><h1>Wildphy Photography</h1></center>



<center><h2> Photographerwise Photo Report</h2></center>

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
$rq=  mysql_query("Select * from photographer_register")
?>
<form method="post">
    
    Select Photographer : <select name="photographer">
        <option value="0">---Select photographer---</option>
        <?php
        while($rd=  mysql_fetch_row($rq))
        {
            ?>
        <option value='<?php echo $rd[0]; ?>'>
                       <?php echo $rd[1] . $rd[2]; ?>
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
        
                             
                             <th >Title</th>
                             <th >Description</th>
                             <th >Data & Time</th>
                             <th >Image</th>
    </tr>
    <?php 
    
   $photographer=$_POST['photographer'];
  $q = mysql_query("select * from photo p , photographer_register pr where p.photographer_register_id=pr.photographer_register_id and p.photographer_register_id='$photographer'");
  while($data = mysql_fetch_row($q))
  {
      echo "<tr>";
      echo "<td>$data[1]</td>";
      echo "<td style='width:350px;'>$data[2]</td>";
      echo "<td>$data[5]</td>";
      echo "<td><a href='../admin/pphotos/$data[3]'><img style='width:100px; height:100px;' src='../admin/pphotos/$data[3]'></td>";
      echo "</tr>";
  }
    
    
    ?>
</table>
<?php 
}

?>



