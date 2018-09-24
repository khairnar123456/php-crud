<?php 
$servername="localhost";
$user="root";
$pass="";
$dbnm="create";

$conn=mysql_connect($servername,$user,$pass);
if(mysql_select_db($dbnm,$conn))
    {
    //echo "success";
    }

else{
    echo "error";
}




?>




