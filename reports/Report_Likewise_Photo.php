



<?php

include '../admin/class/myclass.php';
connection_open();
?>

<center><h1> Wildphy Photography</span></h1></center>



<center><h2>Photo Wise like Report</h2></center>


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


        <!--<form  method="post">
             <input type="submit" value="Get Details">
        </form>-->
<?php
//if($_POST)
//
//{
// 
//
//
//  ?>
       
    <table> 
    
    <tr>
        
                             <th>Photographer_ID</th>
                             <th>Photo Description</th>
                               <th>Image</th>
                             <th>Likes</th>
                             
    </tr>
    <?php 

    $q=  mysql_query("select p.Photographer_Register_ID,p.Photo_Title,p.Photo_URL,count(*) from photo p,photo_like pl where p.Photo_ID=pl.Photo_ID group by p.Photo_Title,p.Photo_URL order by count(*) desc");
    
    while ($data=  mysql_fetch_row($q))
    {
        echo "<tr>";
      echo "<td >$data[0]</td>";
       echo "<td >$data[1]</td>";
        echo "<td><a href='../admin/pphotos/$data[2]'><img style='width:100px; height:100px;' src='../admin/pphotos/$data[2]'></td>";
         echo "<td>$data[3]</td>";
    }
    ?>
    
   </table>
   //<?php 
//}
//
//?>