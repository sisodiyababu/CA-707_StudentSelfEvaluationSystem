<!DOCTYPE HTML>
<html>
<body bgcolor="#66FF66" text="blue" >
<?php
//include "include_path/.;C:\xampp\php\PEAR.php";
session_start();
//$username=$_SESSION["username"];
//if(!session_is_registered(adminusername)){
  //  header("location:loginuser.php");
?>
<script type="text/javascript">
function validaterollno(form)
{
if(form.rollno.value.length!=9)
{
  alert("Invalid Roll Number");
  return false;
}
return true;
}
</script>
<style>
p.one
{
color:red;
font-size:20px;
text-align:left;
}
p.two
{
color:red;
font-size:20px;
text-align:right;
}
</style>
<div>
<p class="one">You are now logged in <?php echo $_SESSION['username'];?></p>
<p class="two"><a href="logout.php" style="text-decoration:none;color:red;margin-right:40px;margin-top:10px">Logout</a></p>
</div>
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div><br><br>
<h3 align="center" text="red">Enter your informationt to see Result</h3>
<form action="showresult.php" method="POST" onsubmit="return validaterollno(this);">
<table border="0" width="30%" height="40%" color="pink" cellspacing="10" cellpadding="10" align="center">
<tr>
    <td align="center" width="40%">Roll No</td>    
	<td><input type="text" name="rollno" size="30" placeholder="Roll Number" required ></td>
</tr>
<tr>
   <td align="center" width="40%">Exam Name</td>
   <td>
   <select name="examname">
   <option value="CT-1">CT-1</option>
   <option value="CT-2">CT-2</option>
   </select>
   </td>
</tr>
</table>	
<div align="center" ><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="submit" name="submit" value="Submit">
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="reset" name="reset" value="Reset"></div>
</form>      
</body>
</html>