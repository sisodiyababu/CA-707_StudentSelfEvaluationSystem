<!DOCTYPE HTML>
<html>
<?php
session_start();
//$tusername=$_SESSION['username']; //body color :1.#90ee90 2.#98fb98 3.#ffefd5 4.#eee8aa 5.#d3d3d3 6.#e6e6fa 7.#dcdcdc 8.#f5f5dc 9.#f0f8ff
?>
<body bgcolor="#d3d3d3" text="blue" >
<div id="header1" >
<div id="content1" style="height:30px;color:blue">Welcome <?php echo $_SESSION['username'] ?></div>
<div id="content2" style="height:30px;color:red;float:right;margin-right:30px;"><a href="logout.php" style="text-decoration:none;color:red;margin-top:-20px;">Logout</a></div>
</div><br>
<?php
mysql_connect("localhost","root","") or die('Couldn not connect :  ' .mysql_error());
mysql_select_db("studentdb")  or die("Cannot select db");
$query="SELECT * FROM studentinfo WHERE username='$_SESSION[username]'";// AND password=md5('$_SESSION[password]')";
//$query="SELECT * FROM studentinfo WHERE username='sisodiyababu' AND password=md5(12345678)";
$res1=mysql_query($query);
if(!$res1)
{
  echo '<script>alert("No records available")</script>';
}
if(mysql_num_rows($res1)==1)
{
//$rows=mysql_num_rows($res);
//echo"$rows";
$res=mysql_fetch_array($res1);
?>
<div id="content">
<div id="subcontent1">
<p style="color:blue;font-size:20px;align:center;margin-left:300px;margin-top:40px;">Account Information of <?php echo $_SESSION['username'] ?></p>
<table border='0' cellspacing="10" cellpadding="4" width="60%" align="left" style="background-color:grey;font-size:20px;border:10px solid darkgrey;border-radius:25px;margin-top:10px;margin-left:50px;padding:10px;cellspacing:10px;" >
<tr>
<td >Name</td>
<td><?php echo $res['name'] ?></td>
</tr>
<tr>
<td>Roll Number</td>
<td><?php echo $res['rollno'] ?></td>
</tr>
<tr>
<td>Department</td>
<td><?php echo $res['department'] ?></td>
</tr>
<tr>
<td>Degree</td>
<td><?php echo $res['degree'] ?></td>
</tr>
<tr>
<td>Contact Number<sup style="color:red">*</sup></td>
<td><?php echo $res['contact'] ?></td>
</tr>
<tr>
<td>E-Mail<sup style="color:red">*</sup></td>
<td><?php echo $res['email'] ?></td>
</tr>
<tr>
<td>Address<sup style="color:red">*</sup></td>
<td><?php echo $res['address'] ?></td>
</tr>
<tr>
<td>Username<sup style="color:red">*</sup></td>
<td><?php echo $res['username'] ?></td>
</tr>
</table>
<div id="go" style="width:100px;height:50px;margin-top:80px;margin-left:700px;">
<td><?php $_SESSION['field']="username" ?><a href="editstudent.php"  style="color:red;margin-top:80px;">Edit Account<sup style="color:red">*</sup></a></td>
</div>
<div id="back" style="width:100px;height:50px;align:ceter;margin-top:300px;margin-left:850px;">
<form action="loginsuccess.php" method="POST">
<input type="submit" value="Cancel">
</div>
<div id="subcontent2" style="float:right;margin-right:50px;width:120px;height:130px;border:5px solid darkgrey;border-radius:10px;margin-top:-450px;">Photo</div>
</div>
<?php
}
?>
</body>
</html>

    	