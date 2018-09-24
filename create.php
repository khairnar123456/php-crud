<?php
include 'conn.php';
if(isset ($_POST['submit']))
{
    $query= "insert into maytable (name,gender,quali,email,password,cpassword) 
            values('".$_POST['name']."','".$_POST['gender']."','".$_POST['quali']."','".$_POST['email']."','".$_POST['password']."','".$_POST['cpassword']."')";
   // print_r($query);
    
    	  // $query="INSERT INTO `mytable` (`name`, `pass`, `phone`) VALUES ('".$_POST['name']."', '".$_POST['pass']."','".$_POST['phone']."');";
    
    
	   if(mysql_query($query))
	   {
             $last_id = mysql_insert_id();


	    echo "inserted sucessful".$last_id;

	   }
	   else
	   {

	    echo "error";
	   }

    
}



?>



<form method="post">
    <label>Name</label>
    <input type="text" name="name"><br>
        <label>Gender  :</label>

        MAle <input type="radio" name="gender" value="male" >

        female <input type="radio" name="gender" value="female" >   <br> 
    <label>Select Quali</label>
    <select name="quali">
        <option value="0">----select eduction-----</option>
        <option value="ssc">ssc</option>
        <option value="hsc">hsc</option>
        <option value="be">be</option>
        <option value="me">me</option>
    </select><br>
    <label>Email</label>

    <input type="email" name="email"><br>
        <label>Pasword</label>

    <input type="password" name="password"><br>
        <label>confirm password</label>

    <input type="password" name="cpassword"><br>


    <input type="submit" name="submit">

</form>


<table border="1px">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>gender</th>
        <th>email</th>
        <th>gender</th>
        <th>gender</th>
        <th>gender</th>
        <th>Action  </th>

    </tr>

<?php $query1="select * from maytable ";
$query2=mysql_query($query1);
while($row=mysql_fetch_array($query2)){
?>
    <tr>
        <td><?php echo $row['id'];?></td>   
        <td><?php echo $row['name'];?></td>   
        <td><?php echo $row['gender'];?></td>   
        <td><?php echo $row['quali'];?></td>   
        <td><?php echo $row['email'];?></td>   
        <td><?php echo $row['password'];?></td>   
        <td><?php echo $row['cpassword'];?></td> 
        <td><a href="create.php?id=<?php echo $row['id']; ?>">Delete</a> |  <a href="edit1.php?id=<?php echo $row['id']; ?>">edit</a></td>

    </tr>

 <?php }  ?>
</table>
<?php
if(isset($_GET['id']))
{
    
$id=$_GET['id'];
echo $id;
    //$sqlq="delete from mytable where id=".$id;
    $result = mysql_query("DELETE FROM maytable WHERE id=$id");

    //$sql1=mysql_query($sql);
    //echo$sql1;
    if($result)
        {
        
        echo "recoed delted";
        } else {
            
        echo "error";}
}


