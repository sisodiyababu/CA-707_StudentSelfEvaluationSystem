<!DOCTYPE HTML>
<html>
<?php
session_start();
?>
<body bgcolor="#66FF66" text="blue" >
<div id="header1" >
<div id="content1" style="height:30px;color:red;">Welcome <?php echo $_SESSION['username'] ?></div>
<div id="content2" style="height:30px;color:red;float:right;margin-right:30px;"><a href="logout.php" style="text-decoration:none;color:red;">Logout</a></div>
</div>
<div id="header" style="text-align:center;width:80%;float:left;">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.jpg" height="105" width="100" border="2"></div><br><br>
<div id="container">
<div id="menu" style="width:300px;height:460px;border:5px;color:ffa500;float:left;margin:left:0;">
<h2 style="align:left;margin-left:30px;"><i>Click on Your Choice :</i></h2><br>
<h3 style="align:left;margin-left:30px;"><a href="listmysubjectresult.php" style="text-decoration:none"><i>* List My Subject Results</a><br><br><br><br>
<a href="addresult.php" style="text-decoration:none">
* Add/Update My Subject Results</i></a></h3>
</div>
<div id="content2" style="width:1030px;height:460px;float:left;margin-right:0px;">
<?php
//session_start();
$nofrecords=0;
$tusername=$_SESSION['username'];
//$tpassword=$_SESSION['password'];
mysql_connect("localhost","root","") or die("Could not Connect to Server");
mysql_select_db("studentdb") or die("Could not Connect to Database");
$query="SELECT distinct coursecode FROM instructorlogininfo WHERE username='$tusername'";
$result=mysql_query($query);
//$rows=mysql_num_rows($result);
if( ! $result )
{
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
}
else if( mysql_num_rows( $result )==0 )
	  {
        ?><br><br><br><br><br><br><h2 style="text-align:center;color:red;font-size:20px;text-decoration:blink;">No Results Available!....</h2><?php
      }
else
{	  
?>
    <?php
	    $check=0;
        while( $tsubjectno = mysql_fetch_assoc( $result ) )
		{
		  $temp="SELECT * FROM studentresultinfo WHERE coursecode='$tsubjectno[coursecode]'";
		  $res1=mysql_query($temp);
		  if( ! $res1 )
           {
            echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
           }
           else if( mysql_num_rows( $result )==0 )
	       {
             ?><br><br><br><br><br><br><h2 style="text-align:center;color:red;font-size:20px;text-decoration:blink;">No Results Available!....</h2><?php
           }
          else
		  {
		    if(!$check)
			{
			 $check=1;
			 ?>
			 <table border="1" align="center" text="black" cellpadding="3" cellspacing="3">
             <tr bgcolor="#a9a9a9">
	         <th>Exam Name</th>
             <th>Course Code</th>
             <th>Course Name</th>
	         <th>Roll Number</th>
             <th>Total Marks</th>
             <th>Marks Obtained</th>
	         <th>Grade</th>
	         <th>Attendance Grade</th>
             </tr>
             </thead>
             <tbody bgcolor="#d3d3d3">
			 <?php
			}
		    while($row=mysql_fetch_array($res1))
			{
			  $nofrecords++;
              echo "<tr><td>{$row['examname']}</td><td>{$row['coursecode']}</td><td>{$row['coursename']}</td><td>{$row['rollno']}</td><td>{$row['totalmarks']}</td><td>{$row['marksobtained']}</td><td>{$row['grade']}</td><td>{$row['attendancegrade']}</td></tr>\n";
            }         
		 }
		}
    ?>
  </tbody>
</table>
    <?php
  }
?>
<p style="text-align:center;font-size:20px;"><?php echo "$nofrecords " ?> Record</p>
</div>
</html>