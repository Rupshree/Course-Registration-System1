<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 0</title>
</head>

<body bgcolor="#CCCCFF">

<p align="center"><font size="5" color="#FF0000">Kindly Fill The Details</font></p><br><br>
<form action="insert2.php" method="post">
<p><font size="4">Name of Student&nbsp;&nbsp;&nbsp;&nbsp;</font>
<input type="text" name="name" size="34" required/></p>
<p>Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="datetime-local" name="bday" size="3" required/>&nbsp;</p>
<p>Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="gndr"  required/>
<select name="gndr">
            <option value="male">Male</option>
            <option value="female">Female</option>
</select></p>
<p>Father's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="father" size="35" required/></p>
<p>Mother's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="mother" size="35" required/></p>
<p>Percentage in 12th&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="percentage">
<select name="percentage">
            <option value="30%-50">Between 30%-50</option>
            <option value="51%-70%">Between 51%-70%</option>
            <option value="70%-80%">Between 70%-80%</option>   
	    <option value="81%-100%">Between 81%-100%</option>           
</select></p>
<p>Year of Passing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="passing"  required/>
<select name="passing">
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>   
	    <option value="2020">2020</option>           
</select></p>
<p>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="address1" size="34" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="address2" size="34"></p>
<p>Email Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="email" name="email" size="34" required/></p>
<p>Mobile No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="mobile" size="34" required/></p>
<p>Select Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="course">&nbsp;
<select name="course">
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Automobile Engineering">Automobile Engineering</option>
            <option value="Computer Science Engineering">Computer Science Engineering</option>   
	    <option value="Information Technology">Information Technology</option>
	    <option value="Electronics Engineering">Electronics Engineering</option>   
	    <option value="Electrical Engineering">Electrical Engineering</option>           
</select></p>
<input type="submit" value="submit">
</form>
</body>

</html>
