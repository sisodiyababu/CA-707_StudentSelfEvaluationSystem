<!DOCTYPE html>
<html>
<body bgcolor="#66FF66" text="blue" >
<div id="container" style="width 500px"></div>
<div id="header" style="background color:#FFA500;text-align:center;">
<h1 style="margin-bottom:0">National Institute of Technology</h1>
<h1 style="margin-top:0">Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:15">Student Self Evaluation System</h2></div>
<p></p>
<script type="text/javascript">
function validate(form){
    var username = form.usename.value;
    var password = form.usepass.value;
 
    if (username.length ==0) {
        alert("You must enter a username.");
        return false;
    }
    if(username.length<8)
	{
	 alert("Username should contain minimum 8 characters");
	 return false;
	}
	if(username.length>12)
	{
	alert("Username should contain maximum 12 characters");
	return false;
	}
    if (password.length ==0) {
        alert("You must enter a password.");
        return false;
    }
	if(password.length<8)
	{
	alert("Password should contain minimum 8 characters/numbers");
	return false;
	}
	if(password.length>12)
	{
	alert("Password should contain maximum 12 characters/numbers");
	return false;
	}
 //alert(userName+"Your password is "+password);
    return true;
}
</script>
<form action="loginuser.php" method="POST" onsubmit="return validate(this)";>
Username:<input type="text" name="usename"><br><br>
Password:<input type="password" name="usepass"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="login" value="Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Reset">
</form>
</body>
</html>