<!DOCTYPE HTML>
<html>
<?php
session_start();
?>
<head>
<script type="text/javascript">
function selectsubname()
{
var option=document.getElementById('coursecode').value;
switch(option)
{
case "CA-721":
           document.getElementById('coursename').value="Data Warehousing and Data Mining";
           break;
case "CA-723":
           document.getElementById('coursename').value="Graphics and Multimedia";
           break;	
case "CA-725":
           document.getElementById('coursename').value="Software Engineering";
           break;	
case "CA-727":
           document.getElementById('coursename').value="Operating Systems";
           break;	
case "CA-729":
           document.getElementById('coursename').value="Object-Oriented Analysis and Design";
           break;	
case "CA-705":
           document.getElementById('coursename').value="OS and Networks Lab";
           break;	
case "CA-707":
           document.getElementById('coursename').value="CASE Tools Lab";
           break;			   
}
}

function validateform(form)
{
if(form.coursecode.value=="")
{
 alert("Please Select Coursecode from dropdown list");
 return false;
}
if(form.designation.value=="")
{
 alert("Please Select Designation from dropdown list");
 return false;
}
if(form.contactno.value.length!=10)
{
 alert("Contact Number Should have 10 digits");
 return false;
}
if(form.username.value.length<8||form.username.value.length>16)
{
  alert("Username should have between 8 to 12 characters");
  return false;
}
if(form.password.value.length<8||form.password.value.length>16)
{
  alert("Length of password should be in between 8 to 12 characters/digits");
  return false;
}
if(form.password.value!=form.confirmpass.value)
{
  alert("No match in password");
  return false;
}
return true;
}
</script>  
</head>
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
<div id="header" style="text-align:center;width:80%;float:left;margin-top:0px;">
<h1 style="margin-bottom:0;">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div>
<h2 style="margin-up:0" align="center">Instructor Registration Form</h2></div>
<form action="adminsignup.php" method="POST" onsubmit="return validateform(this);">
<div id="whole" style="width:1200px;background-color:grey;border:10px solid darkgrey;border-radius:25px;padding:20px;margin-left:50px;">
<div id="complete">
<div id="part1" style="float:left">
<table border="0" align="center" style="width:700px;margin-top:30px;" height="50%" cellspacing="10" cellpadding="3" text="black" >
<tr>
   <td align="center" valign="top" width="40%">Teacher Name<span style="color:blue"></span></td>
   <td > <input required type="text" name="teachername" value="" size="30" bgcolor="white" placeholder="Instructor's Name here" ></td>
</tr>
<tr>
     <td align="center" valign="top" width="40%">Designation<span style="color:blue"></span></td>
     <td>
	 <select name="designation">
	 <option value="">-Select-</option>
	 <option value="Ph.D.">Ph.D.</option>
	 <option value="M.Phil.">M.Phil.</option>
	 <option value="MCA">MCA</option>
	 <option value="MBA">MBA</option>
	 <option value="M.Tech">M.Tech.</option>
	 <option value="M.Sc.">M.Sc.</option>
	 </select>
	 </td> 
</tr>
<tr>
    <td align="center" width="40%">Course Code</td>
    <td>
	<select name="coursecode" id="coursecode" onchange="selectsubname();">
   <option value="">-Select-</option>
   <option value="CA-721">CA-721</option>
   <option value="CA-723">CA-723</option>
   <option value="CA-725">CA-725</option>
   <option value="CA-727">CA-727</option>
   <option value="CA-729">CA-729</option>
   <option value="CA-705">CA-705</option>
   <option value="CA-707">CA-707</option>
   </select>
	</td>
</tr>
<tr>
    <td align="center" width="40%">Course Name</td>
    <td>
    <input required type="text" name="coursename" id="coursename" size="35" value="-Autoselect-">
	</td>
</tr>
<tr>
<td align="center" valign="top" width="40%">Department
	<span style="color:blue"></span></td>
    <td>
	<select name="department" required>
	<option value="">-Select-</option>
	<option value="Computer Application">Computer Application</option>
	<option value="Computer Science and Engineering">Computer Science and Engineering</option>
	<option value="Mathematics">Mathematics</option>
	<option value="Chemical">Chemical</option>
	<option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
	<option value="Physics">Physics</option>
	<option value="Chemistry">Chemistry</option>
	<option value="Management studies">Management Studies</option>
	</select></td>  
</tr>
<tr>
    <td align="center" valign="top" width="40%">Contact Number<span style="color:blue"></span></td>
    <td><input required type="text" name="contactno" value="" size="30" bgcolor="white" placeholder="Instructor's Contact Number here"></td>	 
</tr>
</table>
</div>
<div id="part2">
<table border="0" align="center" width="40%" style="margin-top:30px" height="50%" cellspacing="10" cellpadding="3" text="black" >
<tr>
     <td align="center" valign="top" width="40%">E-mail<span style="color:blue"></span></td>
     <td><input required  type="text" name="email" value="" size="30" bgcolor="white" placeholder="Instructor's E-mail Address"></td>   
</tr>
<tr>
     <td align="center" valign="top" width="40%">Address<span style="color:blue"></span></td>
     <td><input required type="text" name="address" value="" size="30" bgcolor="white" placeholder="Instructor's Address"></td>
</tr>
<tr>
     <td align="center" valign="top" width="40%">Username<span style="color:blue"></span></td>
     <td><input required type="text" name="username" size="30" bgcolor="white" placeholder="Enter Username"></td> 
</tr>
<tr>
     <td align="center" valign="top" width="40%">Password<span style="color:blue"></span></td>
     <td><input required type="password" name="password"  size="30" bgcolor="white" placeholder="Enter Password"></td>
</tr>
<tr>
     <td align="center" width="40%">Confirm Password<span style="color:blue"></span></td>
	 <td><input required type="password" name="confirmpass" size="30" placeholder="Re-enter password"></td>
</tr>	 
</table>
</div>
</div>
     
	 <div align="center" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="submit" name="submit" value="Register">
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="reset" name="reset" value="Reset"></div>
</div>	 
</form>	 
</body>
</html>   	 