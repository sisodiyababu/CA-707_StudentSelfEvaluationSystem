<html>
<?php
//include "include_path/.;C:\xampp\php\PEAR.php";
session_start();
//$username=$_SESSION["username"];
//if(!session_is_registered(adminusername)){
//header("location:loginuser.php");
?>
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
th
{
background-color:a9a9a9;
//background-color:008b8b;
color:556b2f;
//color:008b8b;
font:30px;
}
td
{
background-color:d3d3d3;
color:2f4f4f;
//color:blue;
font:25px;
}
table,th,td
{
border:1px solid green;
}
</style>
<div>
<p class="one">Welcome <?php echo $_SESSION['username'];?></p>
<p class="two"><a href="logout.php" style="text-decoration:none;color:red;margin-right:40px;margin-top:10px">Logout</a></p>
</div>
<body bgcolor="#d3d3d3" text="blue">
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div><br>
<?php
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
<div id="result_table" style="float:right">
<table border="1" style="width:700px;padding:2px;spacing:2px;">
<thead><h3 align="center"><?php echo $_POST["examname"] ?> Examination Result For <?php echo $_POST["rollno"] ?></h3>
    <tr bgcolor="#a9a9a9">
      <th>Course Code</th>
      <th>Course Name</th>
      <th>Total Marks</th>
      <th>Marks Obtained</th>
	  <th>Grade</th>
	  <th>Attendance Grade</th>
    </tr>
  </thead>
  <tbody bgcolor="#d3d3d3">
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
?>
<div align="right" style="margin-right:150px;">
<form action="loginsuccess.php" method="post">
<input type="submit" name="back" value="Back">
</form>
</div>
</body>
</html>