<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function validateform(form)
{
 if(form.rollno.value.length!=9)
    {
	  alert("Roll numbers should contain 9 digits.");
	  return false;
	}
if(form.contactno.value.length!=10)
{
 alert("Contact Number Should have 10 digits");
 return false;
}
if(form.username.value.length<8||form.username.value.length>12)
{
  alert("Username should have between 8 to 12 characters");
  return false;
}
if(form.password.value.length<8||form.password.value.length>12)
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
<body bgcolor="#66FF66" text="blue" >
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div>
<h2 style="margin-up:0" align="center">User Registration Form</h2></div>
<p style="color:red;font-size:16px;text-align:center;">* Only for students</p>
<form action="signup.php" method="POST" onsubmit="return validateform(this);">
<table border="0" align="center" width="40%" height="50%" cellspacing="10" cellpadding="3" text="black" >
<tr>
   <td align="center" valign="top" width="40%">Name<span style="color:blue"></span></td>
   <td > <input required type="text" name="name" value="" size="30" bgcolor="white" placeholder="Your Name here" ></td>
</tr>
<tr>
   <td align="center" valign="top" width="40%">Roll Number<span style="color:blue"></span></td>
   <td> <input required type="text" name="rollno" value="" size="30" bgcolor="white" placeholder="Your Roll Number here"></td>
</tr>
<tr>
<td align="center" valign="top" width="40%">Department
	<span style="color:blue"></span></td>
    <td><input list="department" name="department" size="30" placeholder="Your department here">
	<datalist id="department" >
	<option value="Computer Application">
	<option value="Computer Science and Engineering">
	<option value="Mathematics">
	<option value="Chemical">
	<option value="Electrical and Electronics Engineering">
	<option value="Physics">
	<option value="Chemistry">
	<option value="Management studies">
	</datalist></td>  
</tr>
<tr>
     <td align="center" valign="top" width="40%">Degree<span style="color:blue"></span></td>
     <td>
	 <input required  list="degree" name="degree" size="30%" placeholder="Your Degree here">
	 <datalist id="degree">
	 <option value="MCA">
	 <option value="MBA">
	 <option value="M.Tech-CS">
	 <option value="B.Tech-CS">
	 <option value="B.Tech-Chemical">
	 <option value="B.Tech-Civil">
	 <option value="B.Tech-EC">
	 <option value="B.Tech-EEC">
	 <option value="B.Tech-PROD">
	 <option value="B.Architecture">
	 </datalist>
	 </td> 
</tr>
<tr>
    <td align="center" valign="top" width="40%">Contact Number<span style="color:blue"></span></td>
    <td><input required type="text" name="contactno" value="" size="30" bgcolor="white" placeholder="Your Contact Number here"></td>	 
</tr>
<tr>
     <td align="center" valign="top" width="40%">E-mail<span style="color:blue"></span></td>
     <td><input required  type="text" name="email" value="" size="30" bgcolor="white" placeholder="Your E-mail Address"></td>   
</tr>
<tr>
     <td align="center" valign="top" width="40%">Address<span style="color:blue"></span></td>
     <td><input required type="text" name="address" value="" size="30" bgcolor="white" placeholder="Your Address"></td>
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
     
	 <div align="center" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="submit" name="submit" value="Sign Up">
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="reset" name="reset" value="Reset"></div>
</form>	 
</body>
</html>   	 