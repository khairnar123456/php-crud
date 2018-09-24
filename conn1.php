<?php 

$servernm="localhost";
$useronm="root";
$password="";
$dbnm="create";

$conn= mysql_connect($servernm,$useronm,$password);
if(mysql_select_db($dbnm,$conn)){
    echo 'success';
} else {
     echo 'error';
   
}
