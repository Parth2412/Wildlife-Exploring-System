<?php

include '../admin/class/myclass.php';
connection_open();
?>

<center><h1>Wildphy Photography</h1></center>



<center><h2> Photographer Following Report</h2></center>

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
$rq=  mysql_query("Select * from photographer_register");
?>
<form method="post">
    
    Select Photographer : <select name="photographer_id">
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
    
   $photographer_id=$_POST['photographer_id'];
  $followingphotographer= mysql_query("select *from follow f,photographer_register u where f.photographer_following_id=u.photographer_register_id and f.photographer_register_id='$photographer_id'");
 $followinguser=  mysql_query("select *from follow f,user_register u where f.user_following_id=u.user_register_id and f.photographer_register_id='$photographer_id'");
  //$followersphotographer=  mysql_query("select *from follow f,photographer_register u where f.photographer_register_id=u.photographer_register_id and f.photographer_following_id='$photographer_id'");
  while($data = mysql_fetch_row( $followingphotographer))
  {
      
      echo "<tr>";
      echo "<td>$data[5]</td>";
      echo "<td>$data[6] $data[7]</td>";
      echo "<td>$data[8]</td>";
      echo "<td>$data[9]</td>";
      echo "<td>$data[10]</td>";
      echo "<td>$data[11]</td>";
      echo "<td>$data[13]</td>";
      
      echo "<td><a href='../admin/photographers/$data[14]'><img style='width:70px; height:70px;' src='../admin/photographers/$data[14]'></td>";
      echo "</tr>";
  }
    while($photographerdata= mysql_fetch_row($followinguser))
    {
        echo "<tr>";
      echo "<td>$photographerdata[5]</td>";
      echo "<td>$photographerdata[6] $photographerdata[7]</td>";
      echo "<td>$photographerdata[8]</td>";
      echo "<td>$photographerdata[9]</td>";
      echo "<td>$photographerdata[10]</td>";
      echo "<td>$photographerdata[11]</td>";
      echo "<td>$photographerdata[13]</td>";
      
      echo "<td><a href='../admin/photographers/$photographerdata[14]'><img style='width:70px; height:70px;' src='../admin/photographers/$photographerdata[14]'></td>";
      echo "</tr>";
        
    }
    
    ?>
</table>
<?php 
}

?>


