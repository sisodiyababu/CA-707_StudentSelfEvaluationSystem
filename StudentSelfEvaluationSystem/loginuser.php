<html>
<head>
<script type="text/javascript">
function validatelogin(form)
{
 if(form.username.value.length<8||form.username.value.length>12)
 {
  alert("Invalid Username");
  return false;
 }
 if(form.password.value.length<8||form.password.value.length>12)
 {
  alert("Invalid Password");
  return false;
  }
return true;
}
</script>
</head>
<body bgcolor="#66FF66" text="blue" >
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.jpg" height="105" width="100" border="2"></div><br><br>
<h3 style="margin-bottom:0" align="center">Welcome to User Login</h3></div>
<h4 style="color:red;font-size:18px;text-align:center;">* Only for students</h4>
<p></p><br>
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
</form>	 
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
$query="SELECT * from studentinfo WHERE username='$adminusername' AND password='$adminpassword'";
$res=mysql_query($query);
$rows=mysql_num_rows($res);

if($rows==1)
{
//echo"Login Successful";
//$_SESSION['login']=true;
$_SESSION['username']=$adminusername;
session_register("adminusername");
session_register("adminpassword");
header("Location:loginsuccess.php");
//header("Location:mainpage.php");
}
else
{
  print'<script> alert("Incorrect Username or Password!...")</script>'; 
  //header("Location:loginuser.php");
} 
} 
?>
</h3>
</body>
</html>	