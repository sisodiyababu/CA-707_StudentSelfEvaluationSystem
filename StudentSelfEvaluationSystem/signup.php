<!DOCTYPE HTML>
<html>
<body bgcolor="#66FF66" text="blue" >
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.jpg" height="105" width="100" border="2"></div><br><br><br>
<h3 align="center">
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
  die('Couldn not connect :  ' .mysql_error());
}
mysql_select_db("studentdb",$con);
$sql="INSERT INTO studentinfo(name,rollno,department,degree,contact,email,address,username,password)
VALUES
('$_POST[name]','$_POST[rollno]','$_POST[department]','$_POST[degree]','$_POST[contactno]','$_POST[email]','$_POST[address]','$_POST[username]',md5('$_POST[password]'))";
if(!mysql_query($sql,$con))
{
die('Error! Could not registered:  ' .mysql_error());
}
echo "Registration Successful!...";
mysql_close($con);
?>
<form action="regform.php" method="POST" align="center"><br><br><br>
<input type="submit" name="back" value="Back">
</form>
</h3>
</body>
</html>