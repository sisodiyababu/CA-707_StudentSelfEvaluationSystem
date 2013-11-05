<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function validatepass(form)
{
 if(form.password.value!=form.conpass.value)
 {
   alert("New Password not matching, Re-enter again");
   return false;
 }
 if(form.password.value.length<8||form.password.value.length>12)
 {
   alert("Password length should be in between 8 to 12 characters/digits");
   return false;
 } 
 return true;
}
</script>
</head>
<?php
session_start();
//$tusername=$_SESSION['username']; //body color :1.#90ee90 2.#98fb98 3.#ffefd5 4.#eee8aa 5.#d3d3d3 6.#e6e6fa 7.#dcdcdc 8.#f5f5dc 9.#f0f8ff
?>
<body bgcolor="#d3d3d3" text="blue" >
<div id="header1" >
<div id="content1" style="height:30px;color:blue;">Welcome <?php echo $_SESSION['username'] ?></div>
<div id="content2" style="height:30px;color:red;float:right;margin-right:30px;"><a href="logout.php" style="text-decoration:none;color:red;">Logout</a></div>
</div>
<div id="part2" style="margin-left:500px;margin-top:100px;width:325px;height:200px;border:5px solid darkgrey;background-color:grey;border-radius:15px;">
<table border="0" cellspacing="5px" cellpadding="5px" >
<th>Change Password</th>
<tr>
<td>Old Password</td>
<td>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="return validatepass(this);">
<input type="password" name="oldpass" placeholder="Old password" required></td>
</tr>
<tr>
<td>New Password</td>
<td>
<input type="password" name="password" placeholder="New Password" required>
</td>
</tr>
<tr>
<td>Confirm Password</td>
<td>
<input type="password" name="conpass" placeholder="Confirm Password" required>
</td>
</tr>
</table>
</div>
<div id="changepassword" style="width:100px;height:50px;margin-left:775px;">
<input type="submit" name="submit" value="Save"></div><br>
</form>
<div id="back" style="width:100px;height:50px;align:ceter;margin-top:-70px;margin-left:900px;">
<form action="choiceofinstructor.php" method="POST">
<input type="submit" value="Cancel">
</form></div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
mysql_connect("localhost","root","") or die("Cannot connect ");
mysql_select_db("studentdb") or die("Cannot select db");
$q="UPDATE instructorlogininfo set password=md5('$_POST[password]') WHERE username='$_SESSION[username]' AND password=md5('$_POST[oldpass]')";
if(!mysql_query($q))
 echo '<script> alert("Error! Password not updated...)</script>';
else
echo"Your Password updated Successfully!....";
}
?> 
