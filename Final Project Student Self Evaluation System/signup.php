<!DOCTYPE HTML>
<html>
<style>
a.head:link
{
 color:blue;
 text-decoration:none;
}
a.head:visited
{
 color:blue;
 text-decoration:none;
}
a.head:hover
{
 color:red;
text-decoration:underline;
}
a.marq:hover
{
 background-color:#a9a9a9;
 color:red;
 text-decoration:underline;
}
</style>
<table border="0" width="60%" height="8%" colspan="10" align="center" >
<tr>
    <td ><h3><a class="head" href="mainpage.php">Home</a></h3></td>
    <td ><h3><a class="head" href="about.php">About</a></h3></td>
	<td><h3><a class="head" href="loginuser.php">User Login</a></h3></td>
	<td><h3><a class="head" href="verifyadmin.php">Admin Sign Up</a></h3></td>
	<td><h3><a class="head" href="loginadmin.php">Instructor Login</a></h3></td>
</tr>
</table>
<body bgcolor="#d3d3d3" text="blue" >
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div><br><br><br>
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
