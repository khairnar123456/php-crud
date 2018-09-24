<?php 


include 'conn1.php';
 

$id=$_GET['id'];
echo $id;
if(isset($_GET['id'])){
    
    $sql="delete from maytable where id=$id";
    if (mysql_query($sql))
        {
      echo 'delete';  
header("Location:table.php");        }
 else {echo 'del error';}
}
