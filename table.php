
<table border="1px">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>gender</th>
        <th>quali</th>
        <th>email</th>
        <th>password</th>
        <th>cpass</th>
        <th>action</th>



    </tr>
<?php
include 'conn1.php';
$query="select * from maytable ";
$query1=mysql_query($query);
while ($row = mysql_fetch_array($query1)){?>
    <tr>
                <td><?php echo $row['id']; ?></td>

        <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['quali']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['cpassword']; ?></td>
                <td><a href="delete.php?id=<?php echo $row['id'] ;?>" onclick="return confirm('delete ofrnot')">delete</a> |
                    <a href="update.php?id=<?php echo $row['id']; ?>">update</a></td>

    </tr>
<?php } ?>
</table>