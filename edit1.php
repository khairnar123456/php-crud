<?php
session_start();
/*isset($_SESSION["name"]==""){
	header('location: studentpanel.php');
}*/

$connection = new mysqli('localhost','root','','create');
$query = "select * from maytable where id=".$_GET['id'];
$result= $connection->query($query);
$row = mysqli_fetch_array($result);

if(isset($_POST['send'])) {
extract($_POST);
	 
	$query = "UPDATE maytable SET name = '$name',gender='$gender',quali ='$quali', email = '$email',
	password = '$password', cpassword = '$cpassword'  WHERE id = ".$_GET['id'];
	 
	$result= $connection->query($query);
	if($result)
		{
		
		
	} 
	
else 
{
}
header("Location: http://localhost/php crud/create.php");
}
?>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="mystyle1.css">
	 
	</head>    

	<body>
		<form method="POST" action="">
			<table border="2px" align="center">
			<tr>
			<td align="right">
			<label align="center"> StudentName:</label>
			<input type="text" name="name" value="<?php echo $row['name'];?>"/>
		<br>
		</td>
	</tr>
		<tr>
		<td align="right">
			<label align="center">name:</label>
			<input type="text" name="gender" value="<?php echo $row['gender'];?>"/>	
			<br>
			</td>
			</tr>
			<tr>
			<td align="right">
			<label align="left">pass:</label>
			<input type="text" name="quali" value="<?php echo $row['quali'];?>"/>
			<br>
			</td>
			</tr>
			<tr>
			<td align="right">
			<label>mobile:</label>
			<input type="text" name="email" value="<?php echo $row['email'];?>"/>
			<br>
			</td>
			</tr>
			 <tr>
			<td align="right">
			<label>mobile:</label>
			<input type="text" name="password" value="<?php echo $row['password'];?>"/>
			<br>
			</td>
			</tr>
			 
			
			 <tr>
			<td align="right">
			<label>mobile:</label>
			<input type="text" name="cpassword" value="<?php echo $row['cpassword'];?>"/>
			<br>
			</td>
			</tr> 
		
			 
			 
			
			<tr>
			<td align="center">
			<input type="submit" name="send"/>
			</td>
			</tr>
	</table>
		</form>
	</body>
</html>