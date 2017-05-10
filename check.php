<html>
<head></head>
<body>
<?php

// Inialize session
session_start();

// Include database connection settings
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
// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM student WHERE (loginid = '" . mysql_real_escape_string($_POST['loginid']) . "') and (pass = '" . mysql_real_escape_string($_POST['pass']) . "')");




// Check username and password match
if (mysql_num_rows($login) == 1) {
// Set username session variable
$_SESSION['loginid'] = $_POST['loginid'];
$_SESSION['pass'] = $_POST['pass'];
// Jump to secured page
header('Location: detail.php');
}
else {
// Jump to login page

header('Location: home1.php');

}

?>
</body>
<html>