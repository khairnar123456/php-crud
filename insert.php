<?php
include 'conn1.php';
if (isset($_POST['submit'])) {
    if ($_POST['name'] && $_POST['gender'] && $_POST['quali'] && $_POST['email'] && $_POST['password'] && $_POST['password']) {
        $query = "insert into maytable (name,gender,quali,email,password,cpassword)
              values('" . $_POST['name'] . "','" . $_POST['gender'] . "','" . $_POST['quali'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "','" . $_POST['cpassword'] . "')";
        if (mysql_query($query)) {
            echo 'inserted';
        } else {
            echo 'error in insert';
        }
    } else {
        echo 'field required';
    }
}
?>



<form method="post" name="myform" onsubmit=" return myfunction()">
    <table border="1px">
        
                <label>Name</label>
                <input type="text" name="name">
                <span id="name"></span>
      
        <tr>
            <td>
                <label>Gender  :</label>

                Female     <input type="radio" name="gender" value="female">
                Male         <input type="radio" name="gender" value="male">
                <span id="gender"></span>

            </td>
        </tr>


        <tr>
            <td>
                <select name="quali">
                    <option value="0">----select------</option>
                    <option value="BE">BE</option>
                    <option value="ME">ME</option>
                </select>   
                                <span id="quali"></span>

            </td>
        </tr>
        <tr>
            <td>
                <label>Email</label>
                <input type="email" name="email">
            </td>
        </tr>
        <tr>
            <td>
                <label>Password</label>
                <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td>
                <label>Confirm password</label>
                <input type="password" name="cpassword">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit">
            </td>
        </tr>



    </table>    

</form>



<script>
   function myfunction(){
       var  name12= document.myform.name.value;
             
      // alert(name12);
       if(name12 == "")
       {
           //document.getElementById("name").innerHTML = "name is required";
             document.getElementById("name").innerHTML = "NAme is required";  
             return false;
       }
//        var  gen= document.myform.gender.value;
//      // alert(gen);
//       if(gen == "")
//       {
//           //document.getElementById("name").innerHTML = "name is required";
//             document.getElementById("gender").innerHTML = "plzz select gender";  
//             return false;
//       }
               var  quali= document.myform.quali.value;

       if(quali == "")
       {
           //document.getElementById("name").innerHTML = "name is required";
             document.getElementById("quali").innerHTML = "plzz select qualification";  
             return false;
       }
         var gender = document.getElementsByName('gender');
        var genValue = false;

        for(var i=0; i<gender.length;i++){
            if(gender[i].checked == true){
                genValue = true;    
            }
        }
        if(!genValue){
            alert("Please Choose the gender");
            return false;
        }
   } 
   
   
    
</script>