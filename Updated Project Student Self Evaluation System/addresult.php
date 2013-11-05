<!DOCTYPE HTML>
<html>
<?php
session_start();
$tusername=$_SESSION['username'];
?>
<style>
a.head:link
{
 color:blue;
 text-decoration:none;  //body color :1.#90ee90 2.#98fb98 3.#ffefd5 4*.#eee8aa 5*.#d3d3d3 6.#e6e6fa 7.#dcdcdc 8.#f5f5dc 9.#f0f8ff pev. #66FF66
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
<body bgcolor="#d3d3d3" text="blue" >
<div id="header1" >
<div id="content1" style="height:30px;color:red;">Welcome <?php echo $_SESSION['username'] ?></div>
<div style="float-center">
<a href="temp.php" style="color:red;font-size:16px;margin-left:600px;text-align:center;text-decoration:none;">Account Setting</a></div>
<div >
<div id="content2" style="height:30px;color:red;float:right;margin-right:30px;"><a href="logout.php" style="text-decoration:none;color:red;">Logout</a></div>
</div>
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div><br><br>
<div id="container">
<div id="menu" style="width:300px;height:250px;border:5px solid darkgrey;border-radius:25px;background-color:grey;float:left;margin:left:0;margin-top:40px">
<h2 style="align:left;margin-left:30px;"><i>Click on Your Choice :</i></h2><br>
<h3 style="align:left;margin-left:30px;"><a class="head" href="listmysubjectresult.php"><i>* List My Subject Results</a><br><br><br><br>
<a class="head" href="addresult.php">
* Add/Update My Subject Results</i></a></h3>
</div>
<div id="content2" style="width:1000px;height:350px;float:left;margin-left:12px;margin-right:0px;background-color:grey;border:5px solid darkgrey;border-radius:20px;">
<div id="subcontent1" style="float:left;margin-left:50px;">
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

function validateresult(form)
{
if(form.rollno.value.length!=9)
{
 alert("Incorrect Roll Number");
 return false;
}
if(form.totalmarks.value<=0)
{
  alert("Invalid Total Marks");
  return false;
}
if(form.marksobtained.value<0)
{
  alert("Invalid Marks Obtained");
  return false;
} 
return true;
}
</script> 
<style>
p.one
{
color:red;
font-size:16px;
}
</style>
<h2 style="margin-botton:5" align="center">Result Submission Form</h2>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="return validateresult(this);">
<table border="0" style="width:400px" height="40%" cellspacing="8" cellpadding="3" align="center">
<tr>
   <td align="center">Add/Update Result</td>
   <td>
   <select name="operation" required>
   <option value="">-Select-</option>
   <option value="addnew">Add New Result</option>
   <option value="update">Update Existing Result</option>
   </select>
   </td>
</tr>
<tr>   
   <td align="center" width="40%">Exam Name</td>
   <td>
   <select name="examname" required>
   <option value="">-Select-</option>
   <option value="CT-1">CT-1</option>
   <option value="CT-2">CT-2</option>
   </select>
   </td>
</tr>
<tr>
    <td align="center" width="40%">Roll No</td>    
	<td><input type="text" name="rollno" size="30" placeholder="Roll Number" required ></td>
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
   <input type="text" name="coursename" id="coursename" size="35" value="-Autoselect-" required>
	</td>
</tr>
</table>
</div>
<div id="subcontent2" style="margin-top:70px;margin-right:30px;">
<table border="0" style="width:700px;margin-right:30px;" height="40%" cellspacing="8" cellpadding="3" align="center">
<tr>
    <td align="center" width="40%">Total Marks</td>
    <td><input type="text" name="totalmarks" size="30" placeholder="Total Marks" required></td>
</tr>
<tr>
    <td align="center" width="40%">Marks Obtained</td>
    <td><input type="text" name="marksobtained" size="30" placeholder="Marks Obtained" required></td>
</tr>
<tr>
    <td align="center" width="40%">Grade</td>
    <td>
   <select name="grade">
   <option value="">-Select-</option>
   <option value="S">S</option>
   <option value="A">A</option>
   <option value="B">B</option>
   <option value="C">C</option>
   <option value="D">D</option>
   <option value="E">E</option>
   <option value="F">F</option>
   <option value="U">U</option>
   <option value="W">W</option>
   <option value="V">V</option>
   </select>
	</td>
</tr>
<tr>
    <td align="center" width="40%">Attendance Grade</td>
    <td>
   <select name="attendancegrade">
   <option value="">-Select-</option>
   <option value="VG">VG</option>
   <option value="G">G</option>
   <option value="M">M</option>
   <option value="P">P</option>
   <option value="VP">VP</option>
   </select>
	</td>
</tr>
</table></div><br><br>
<div align="center" style="width:1710px;left-margin:300px;margin-right:50px"><br>
	 <input type="submit" name="submit" value="Submit Result">
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="reset" name="reset" value="Reset"></div>
</body>	
<h4 align="center">
<?php
//session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
mysql_connect("localhost","root","") or die('Couldn not connect :  ' .mysql_error());
mysql_select_db("studentdb")  or die("Cannot select db");
$verifyquery="SELECT coursecode , username FROM instructorlogininfo WHERE coursecode='$_POST[coursecode]' AND username='$tusername'";
$result=mysql_query($verifyquery);
$nofrows=mysql_num_rows($result);
if($nofrows!=1)
{
  echo '<script> alert("You do not have permission to add/update result for this subject!")</script>';
}
else if(!strcmp($_POST["operation"],'addnew'))
{
$sql="INSERT INTO studentresultinfo(examname,rollno,coursecode,coursename,totalmarks,marksobtained,grade,attendancegrade)
VALUES
('$_POST[examname]','$_POST[rollno]','$_POST[coursecode]','$_POST[coursename]','$_POST[totalmarks]','$_POST[marksobtained]','$_POST[grade]','$_POST[attendancegrade]')";
if(!mysql_query($sql))
{
die('Error! Could not registered:  ' .mysql_error());
}
echo '<script> alert("Result Submission Successful!...")</script>';
//mysql_close($con);
}
else
{
 $updtmarks="UPDATE studentresultinfo set totalmarks='$_POST[totalmarks]' WHERE examname='$_POST[examname]' AND rollno='$_POST[rollno]' AND coursecode='$_POST[coursecode]'";
 $updmarksobt="UPDATE studentresultinfo set marksobtained='$_POST[marksobtained]' WHERE examname='$_POST[examname]' AND rollno='$_POST[rollno]' AND coursecode='$_POST[coursecode]'";
 $updgrade="UPDATE studentresultinfo set grade='$_POST[grade]' WHERE examname='$_POST[examname]' AND rollno='$_POST[rollno]' AND coursecode='$_POST[coursecode]'";
 $updatgrade="UPDATE studentresultinfo set attendancegrade='$_POST[attendancegrade]' WHERE examname='$_POST[examname]' AND rollno='$_POST[rollno]' AND coursecode='$_POST[coursecode]'";
 if(!mysql_query($updtmarks)||!mysql_query($updmarksobt)||!mysql_query($updgrade)||!mysql_query($updatgrade))
 {
  die('Error! Could not registered:  ' .mysql_error());
 }
echo '<script> alert("Result update Successful!...")</script>';
//mysql_close($con); 
 }
 }
?> 
</h4>
</div>
</div>
</html>

    	