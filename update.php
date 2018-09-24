<?php 
include 'conn1.php';
   $id= $_GET['id'];
echo $id;
$query=mysql_query("select * from maytable where id=$id");
$row=mysql_fetch_array($query);
if(isset($_POST['submit'])){
    extract($_POST);
//    $sql= "update maytable set name ='$name',gender='$gender',quali='$quali',email='$email',pasword='$password',cpassword='$cpassword' where id =$id";
//    $res = mysql_query($sql);
//    print_r($res);
    
    	$query = "UPDATE maytable SET name = '$name',gender='$gender',quali ='$quali', email = '$email',
	password = '$password', cpassword = '$cpassword'  WHERE id = ".$_GET['id'];
$res=mysql_query($query);
    if($res){     
header("Location:table.php");
}
else {
    echo 'error';    
}
}

?>

<form method="post" name="myform" onsubmit=" return myfunction()">
    <table border="1px">
        
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $row['name']?>">
                <span id="name"></span>
      
        <tr>
            <td>
                <label>Gender  :</label>

                Female     <input type="radio" name="gender" value="female" <?php echo $row['gender']=='female' ? 'checked' :'';?> >
                Male         <input type="radio" name="gender" value="male"  <?php echo $row['gender']=='male' ? 'checked' :'';?> >
                <span id="gender"></span>

            </td>
        </tr>


        <tr>
            <td>
                <select name="quali">
                    <option value="0">----select------</option>
                    B
                    <option value="BE" <?php echo (isset($row) && $row['quali'] == 'BE') ? 'selected=selected' : ''; ?>>BE</option>

                    <option value="ME" <?php echo (isset($row) && $row['quali'] == 'ME') ? 'selected=selected' : ''; ?>>ME</option>
                </select>   
                                <span id="quali"></span>

            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $row['email'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>Password</label>
                <input type="password" name="password"value="<?php echo $row['password'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>Confirm password</label>
                <input type="password" name="cpassword"value="<?php echo $row['cpassword'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit">
            </td>
        </tr>



    </table>    

</form>
