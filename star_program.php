<!Doctype html>
<html>
<head><title>print star pattern in PHP</title>
</head>
<body>

<!--php code starts-->
<?php

/*Php program to print a pattern *
 **
 ***
 ****
 *****
 ******
 */
 // loop for number of rows
 for($i=0;$i<=2;$i++)
 { 
 //loop for number of times to print(*) in one line.
    
 for($j=0;$j<=$i;$j++)
 { 
 echo "*";

 }
 
 //print the next line
 echo "<br>";
 }
 
?>
<!--php code ends-->

</body>
</html>
