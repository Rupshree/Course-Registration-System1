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
 
$sql="INSERT INTO student (name, loginid, pass, email)
VALUES ('$_POST[name]','$_POST[loginid]','$_POST[pass]','$_POST[email]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
<br><br><a href="home.php"><input type="button" value="Login"></a><br><br>
</body>
</html