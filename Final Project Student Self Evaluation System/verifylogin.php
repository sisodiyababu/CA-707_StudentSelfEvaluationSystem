<!DOCTYPE HTML>
<html>
<body bgcolor="#66FF66" text="blue" >
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div><br><br>
<h3 align="center">
<?php
mysql_connect("localhost","root","") or die("Cannot connect ");
mysql_select_db("studentdb") or die("Cannot select db");
$username=$_POST['username']; 
$password=$_POST['password']; 
$encpass=md5($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($encpass);
$query="SELECT * from studentinfo WHERE username='$username' AND password='$password'";
$res=mysql_query($query);
$rows=mysql_num_rows($res);
if($rows==1)
{
echo"Login Successful";
//$_SESSION['username']=$username;
//header("Location:mainpage.php");
}
else
{
  //echo "Incorrect Username or Password"; 
  header("Location:loginuser.php?error=Incorrect+Username+or+Password");
}  
?>
</body>
</html>