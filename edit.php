<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    //$query= "insert into maytable (name,gender,quali,email,password,cpassword)";
   
 
    include 'conn.php';

    if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
  $fetched_row=mysql_fetch_array($result_set);
}
    
if(isset($_POST['edit']))
{
    
 $id=$_GET['id'];
    echo $id;

    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $quali=$_POST['quali'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
   
    
$query = mysql_query("UPDATE maytable SET name = '$name', gender = '$gender',quali = '$quali',email = '$email',password = '$password',cpassword = '$cpassword' WHERE id = $id");


}

?>

<form method="post">
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $name1?>"><br>
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


    <input type="submit" name="edit">

</form>

