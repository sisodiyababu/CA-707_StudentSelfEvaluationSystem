<!DOCTYPE HTML>
<html>
<body bgcolor="#d3d3d3" text="blue" >
<?php
//include "include_path/.;C:\xampp\php\PEAR.php";
session_start();
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
color:blue;
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
<div id="header1">
<div style="align:left:margin-left:50px;float:left;">
<p class="one">Welcome <?php echo $_SESSION['username'];?></p>
</div>
<div style="float-center">
<a href="studentaccountsetting.php" style="color:red;font-size:16px;margin-left:400px;text-align:center;text-decoration:none;">Account Setting</a></div>
<div style="float-right">
<p class="two"><a href="logout.php" style="float:right;text-decoration:none;color:red;margin-right:80px;margin-top:-20px">Logout</a></p>
</div>
</div><br>
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div><br><br><br>
<div id="complete">
<div id="content" style="float:left;width:450px;margin-top:50px;margin-left:50px;border:10px solid burlywood;border-radius:25px;padding:10px;background-color:#808080;">
<h3 align="center" text="red">Enter your informationt to see Result</h3>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="return validaterollno(this);">
<table border="0" width="80%" height="40%" color="pink" cellspacing="10" cellpadding="10" align="center">
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
</div>
<div id="result_table" style="margin-right:60px">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
$rollno=$_POST["rollno"];
$texamname=$_POST["examname"];
$examname=strtolower($texamname);
mysql_connect("localhost","root","") or die("Could not Connect to Server");
mysql_select_db("studentdb") or die("Could not Connect to Database");
$query="SELECT * FROM studentresultinfo WHERE rollno='$rollno' AND examname='$examname'";
$result=mysql_query($query);
//$rows=mysql_num_rows($result);
if( ! $result )
{
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
}
else if( mysql_num_rows( $result )==0 )
	  {
        ?><br><br><br><br><br><br><h2 style="text-align:right;margin-right:350px;color:red;font-size:20px;text-decoration:blink;">No Results Available!....</h2><?php
      }
else
{	  
?>
<div id="result_table" style="float:right;border:10px solid burlywood;margin-top:40px;border-radius:25px;cellpadding:5px;">
<table border="0" cellspacing="3px" cellpadding="2px" style="width:700px" >
<thead><h3 align="center"><?php echo $_POST["examname"] ?> Examination Result For <?php echo $_POST["rollno"] ?></h3>
    <tr bgcolor="grey">
      <th>Course Code</th>
      <th>Course Name</th>
      <th>Total Marks</th>
      <th>Marks Obtained</th>
	  <th>Grade</th>
	  <th>Attendance Grade</th>
    </tr>
  </thead>
  <tbody bgcolor="#a9a9a9">
    <?php
	    $obtained=0;
		$total=0;
        while( $row = mysql_fetch_assoc( $result ) )
		{
		  $total+=$row['totalmarks'];
		  $obtained+=$row['marksobtained'];
          echo "<tr><td>{$row['coursecode']}</td><td>{$row['coursename']}</td><td>{$row['totalmarks']}</td><td>{$row['marksobtained']}</td><td>{$row['grade']}</td><td>{$row['attendancegrade']}</td></tr>\n";
        }
		$cgpa=($obtained*10)/$total;
    ?>
	<tr>
	  <td style="text-align:center;width:200px;">Grade Point Average</td>
	  <td style="text-align:center"><?php echo "$cgpa" ?></td>
	</tr>  
  </tbody>
</table>
</div>
    <?php
  }
 }
?>
</div>
</div>    
</body>
</html>