<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<style>
p.one
{
color:red;
font-size:16px;
text-align:left;
}
p.two
{
color:red;
font-size:16px;
text-align:right;
}
</style>
<body bgcolor="#d3d3d3" text="blue" >
<div>
<p class="one">Welcome <?php echo $_SESSION['username'];?></p>
<p class="two"><a href="logout.php" style="text-decoration:none;color:red;margin-right:40px;margin-top:0px;">Logout</a></p>
</div>
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
$sql="INSERT INTO instructorlogininfo(teachername,designation,coursecode,coursename,department,contactno,email,address,username,password)
VALUES
('$_POST[teachername]','$_POST[designation]','$_POST[coursecode]','$_POST[coursename]','$_POST[department]','$_POST[contactno]','$_POST[email]','$_POST[address]','$_POST[username]',md5('$_POST[password]'))";
if(!mysql_query($sql,$con))
{
die('Error! Could not registered:  ' .mysql_error());
}
echo "Registration Successful!...";
mysql_close($con);
?>
<form action="adminregform.php" method="POST" align="center"><br><br><br>
<input type="submit" name="back" value="Back">
</form>
</h3>
</body>
</html>