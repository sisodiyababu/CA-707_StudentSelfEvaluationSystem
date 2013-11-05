<html>
<head>
<script type="text/javascript">
function validatelogin(form)
{
 if(form.username.value.length<8||form.username.value.length>16)
 {
  alert("Invalid Username");
  return false;
 }
 if(form.password.value.length<8||form.password.value.length>16)
 {
  alert("Invalid Password");
  return false;
  }
return true;
}
</script>
</head>
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
</style>
<table border="0" width="60%" height="8%" colspan="10" align="center">
<tr>
    <td><h3><a class="head" href="mainpage.php">Home</a></h3></td>
    <td><h3><a class="head" href="about.php">About</a></h3></td>
	<td><h3><a class="head" href="regform.php">User Sign Up</a></h3></td>
	<td><h3><a class="head" href="loginuser.php">User Login</a></h3></td>
	<td><h3><a class="head" href="verifyadmin.php">Admin Sign Up</a></h3></td>
</tr>
</table>
<body bgcolor="#d3d3d3" text="blue" >
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div><br><br>
<h3 style="margin-bottom:0" align="center">Welcome to Instructor Login</h3></div>
<h4 style="color:red;font-size:18px;text-align:center;">* Only for Instructor/teacher</h4>
<p></p><br>
<div id="box" style="width:400px;background-color:grey;border:10px solid darkgrey;border-radius:25px;spacing:10px;padding:10px;margin-left:450px;">
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="return validatelogin(this);">
<table border="0" width="20%" height="20%" cellspacing="5" cellpadding="3" align="center" >
<tr>
    <td align="center">Username</td>
    <td ><input type="text" name="username" value="" placeholder="Username" size="30" required></td>
</tr>
<tr>
    <td align="center">Password</td>
    <td><input type="password" name="password" value="" placeholder="Password" size="30" required></td>	
</tr>
</table>
<div align="center" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="submit" name="login" value="Login">
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="reset" name="reset" value="Reset"></div>	
</form></div>	 
<h3 align="center">
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
$adminusername=$_POST["username"]; 
$adminpassword=$_POST["password"]; 
mysql_connect("localhost","root","") or die("Cannot connect ");
mysql_select_db("studentdb") or die("Cannot select db");
$encpass=md5($adminpassword);
$adminusername = mysql_real_escape_string($adminusername);
$adminpassword = mysql_real_escape_string($encpass);
$query="SELECT * from instructorlogininfo WHERE username='$adminusername' AND password=md5('$adminpassword')";
$res=mysql_query($query);
$rows=mysql_num_rows($res);
if(!$rows)
{
$result=mysql_fetch_assoc($res);
$_SESSION['username']=$adminusername;
$_SESSION['coursecode']=$result['coursecode'];
$_SESSION['coursename']=$result['coursename'];
session_register("adminusername");
session_register("adminpassword");
header("Location:choiceofinstructor.php");
}
else
{
  print'<script> alert("Incorrect Username or Password!...")</script>'; 
} 
} 
?>
</h3>
</body>
</html>	