<!DOCTYPE HTML>
<html>
<?php
session_start();
//$tusername=$_SESSION['username']; //body color :1.#90ee90 2.#98fb98 3.#ffefd5 4.#eee8aa 5.#d3d3d3 6.#e6e6fa 7.#dcdcdc 8.#f5f5dc 9.#f0f8ff
?>
<body bgcolor="#d3d3d3" text="blue" >
<div id="header1" >
<div id="content1" style="height:30px;color:blue;">Welcome <?php echo $_SESSION['username'] ?></div>
<div style="float-center;margin-top:0px;">
<a href="editinstructorpass.php" style="color:red;font-size:16px;margin-left:400px;text-align:center;text-decoration:none;">Change Password</a></div>
<div id="content2" style="height:30px;color:red;float:right;margin-right:30px;margin-top:-30px;"><a href="logout.php" style="text-decoration:none;color:red;">Logout</a></div>
</div>
<?php
mysql_connect("localhost","root","") or die('Couldn not connect :  ' .mysql_error());
mysql_select_db("studentdb")  or die("Cannot select db");
$query="SELECT * FROM instructorlogininfo WHERE username='$_SESSION[username]'"; // AND password='$_SESSION[password]'";
//$query="SELECT * FROM studentinfo WHERE username='sisodiyababu' AND password=md5(12345678)";
$res1=mysql_query($query);
if(!$res1||mysql_num_rows($res1)!=1)
{
  echo '<script>alert("No records available")</script>';
}
$res=mysql_fetch_array($res1);
?>
<div id="complete">
<div id="part1">
<table border='0' cellspacing="10" cellpadding="4" align="center" style="font-size:20px;border:5px solid darkgrey;background-color:grey;border-radius:25px;margin-top:80px;padding:5px;" >
<tr>
<td >Name</td>
<td><?php echo $res['teachername'] ?></td>
</tr>
<tr>
<td>Designation</td>
<td><?php echo $res['designation'] ?></td>
</tr>
<tr>
<td>Course Code</td>
<td><?php echo $res['coursecode'] ?></td>
</tr>
<tr>
<td>Course Name</td>
<td><?php echo $res['coursename'] ?></td>
</tr>
<tr>
<td>Department</td>
<td><?php echo $res['department'] ?></td>
</tr>
<tr>
<td>Contact Number</td>
<td>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
<input type="text" name="contact" value="<?=$res['contactno']?>">
</td>
</tr>
<tr>
<td>E-Mail</td>
<td>
<input type="text" name="email" value="<?=$res['email']?>">
</td>
</tr>
<tr>
<td>Address</td>
<td>
<input type="text" name="address" value="<?=$res['address']?>">
</td>
</tr>
<tr>
<td>Username</td>
<td>
<input type="text" name="username" value="<?=$res['username']?>">
</td>
</tr>
</table>
</div>
</div>
<div id="editotherfields" style="width:100px;height:50px;align:center;margin-top:30px;margin-left:750px;">
<input type="submit" value="Save"></div>
</form>
<div id="back" style="width:100px;height:50px;align:ceter;margin-top:-50px;margin-left:850px;">
<form action="choiceofinstructor.php" method="POST">
<input type="submit" value="Cancel">
</form></div>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
mysql_connect("localhost","root","") or die("Could not conncet to server");
mysql_select_db("studentdb") or die("Could not find database");
$q1="UPDATE instructorlogininfo set contact='$_POST[contact]' WHERE username='$_SESSION[username]'"; //AND email='$_POST[email]' AND address='$_POST[address]' AND username='$_POST[username]' WHERE username='$_SESSION[username]'";
$q2="UPDATE instructorlogininfo set email='$_POST[email]' WHERE username='$_SESSION[username]'";
$q3="UPDATE instructorlogininfo set address='$_POST[address]' WHERE username='$_SESSION[username]'";
$q4="UPDATE instructorlogininfo set username='$_POST[username]' WHERE username='$_SESSION[username]'";
if(!mysql_query($q1)||!mysql_query($q2)||!mysql_query($q3)||!mysql_query($q4))
   die('Error! Could not Updated!...:  ' .mysql_error());
else
   echo'<script>alert("Your Account information Updated!.....")</script>';   
}    	