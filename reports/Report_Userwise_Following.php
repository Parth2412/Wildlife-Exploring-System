<?php

include '../admin/class/myclass.php';
connection_open();
?>

<center><h1>Wildphy Photography</h1></center>



<center><h2> User Following Report</h2></center>

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
$rq=  mysql_query("Select * from user_register");
?>
<form method="post">
    
    Select User : <select name="user">
        <option value="0">---Select User---</option>
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
                             
                             <th >Email</th>
                            
                             <th >Picture</th>
    </tr>
    <?php 
    
   $user=$_POST['user'];
 $followingphotographer=  mysql_query("select * from follow f , photographer_register p where f.photographer_register_id=p.photographer_register_id and f.user_following_id='$user'");
 $followinguser=  mysql_query("select * from follow f , user_register u where f.user_following_id=u.user_register_id and f.user_register_id='$user'");
  while($data = mysql_fetch_row( $followingphotographer))
  {
      
      echo "<tr>";
      echo "<td>$data[5]</td>";
      echo "<td>$data[6] $data[7]</td>";
     
     
     
      echo "<td>$data[11]</td>";
     
      
      echo "<td><a href='../admin/photographers/$data[14]'><img style='width:100px; height:100px;' src='../admin/photographers/$data[14]'></td>";
      echo "</tr>";
  }
    while($photographerdata= mysql_fetch_row($followinguser))
    {
        echo "<tr>";
      echo "<td>$photographerdata[5]</td>";
      echo "<td>$photographerdata[6] $photographerdata[7]</td>";
     
      echo "<td>$photographerdata[11]</td>";
      
      
      echo "<td><a href='../admin/photographers/$photographerdata[14]'><img style='width:70px; height:70px;' src='../admin/photographers/$photographerdata[14]'></td>";
      echo "</tr>";
        
    }
    
    ?>
</table>
<?php 
}

?>


