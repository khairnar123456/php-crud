<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="" method="post">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" align="center"><strong>User Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<?php 
$connection = new mysqli('localhost','root','','create');
$query = "select * from maytable";
$result= $connection->query($query);
while ($row = mysqli_fetch_array($result)){
$id=$row['id'];
echo $id;



?>
<input name="id" type="hidden"  value="<?php echo $row['id'];?>">
<?php } ?>
<td width="294"><input name="email" type="text" id="email"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Login">
<input type="reset" name="reset" value="reset"></td>
</form>
</tr>
</table>
</td>

</tr>
</table>
<?php
if (isset($_POST['submit']))
	{	  
include("conn.php");

session_start();

$username=$_POST['email'];
$password=$_POST['password'];

//$_SESSION['login_user']=$username;
 
$query = mysql_query("SELECT email   FROM maytable WHERE email='$username' and password='$password'");
$result = mysql_query("select id from maytable where email ='$username'");
$row = mysql_fetch_array($result);
$id = $row['id']; 
$_SESSION['user_id']=$id;

 if (mysql_num_rows($query) != 0)
{

// echo "<script language='javascript' type='text/javascript'> location.href='edit.php' </script>";
        echo 'welcome';
  }

  else
  {
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
}

}
    
?>
						
        </article>								
	</main>
      </div>
    </div>
   
  </div>
</body>
</html>
