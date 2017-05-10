<html>
<head><title>Record</title>
</head>
<body>
 
<?php

$hostname = "localhost";
$username = "root";
$password = "Asimov";
$db_name = "course";
$con = mysql_connect($hostname,$username,$password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db($db_name, $con);
 
$sql="INSERT INTO stdetail (name, bday, gndr, father, mother, percentage, passing, address1, address2, email, mobile, course)
VALUES ('$_POST[name]','$_POST[bday]','$_POST[gndr]','$_POST[father]','$_POST[mother]','$_POST[percentage]','$_POST[passing]','$_POST[address1]','$_POST[address2]','$_POST[email]','$_POST[mobile]','$_POST[course]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

header('Location: payment.php'); 
mysql_close($con)
?>
</body>
</html