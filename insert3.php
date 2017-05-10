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
 
$sql="INSERT INTO payment (id, mode, amount)
VALUES ('$_POST[id]','$_POST[mode]','$_POST[amount]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header('Location: congrates.php');
 
mysql_close($con)
?>
<br><br><a href="home.php"><input type="button" value="Login"></a><br><br>
</body>
</html