<?php

include '../admin/class/myclass.php';
connection_open();
?>



<center><h1>WildPhy Photography</h1></center>



<center><h2>Genderwise Photographer Report</h2></center>

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

<form method="post">
    
    Gender : <select name="gender">
        <option>Male</option>
       <option>FeMale</option>
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
                             <th >Name</th>
                             <th >Gender</th>
                             <th >Birthdate</th>
                             <th >City</th>
                             <th >Email</th>
                             <th >Mobile No</th>
                             <th >Picture</th>
    </tr>
    
    <?php 
    $gender = $_POST['gender'];
    $q = mysql_query("select * from photographer_register where Photographer_Gender='{$gender}' ") or die(mysql_error());
    
  while($data = mysql_fetch_row($q))
  {
      echo "<tr>";
      echo "<td>$data[0]</td>";
      echo "<td>$data[1] $data[2]</td>";
      echo "<td>$data[3]</td>";
      echo "<td>$data[4]</td>";
      echo "<td>$data[5]</td>";
      echo "<td>$data[6]</td>";
      echo "<td>$data[8]</td>";
      echo "<td><a href='../admin/photographers/$data[9]'><img style='width:70px; height:70px;' src='../admin/photographers/$data[9]'></td>";
      echo "</tr>";
  }
    
    
    ?>
</table>

<?php 
}

?>