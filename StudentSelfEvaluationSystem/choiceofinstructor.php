<!DOCTYPE HTML>
<html>
<?php
session_start();
?>
<body bgcolor="#66FF66" text="blue" 
<div id="header1" >
<div id="content1" style="height:30px;color:red;">Welcome <?php echo $_SESSION['username'] ?></div>
<div id="content2" style="height:30px;color:red;float:right;margin-right:30px;">Logout</div>
</div>
<div id="header" style="text-align:center;width:80%;float:left;color:blue">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div><br><br>
<div id="container">
<div id="menu" style="width:300px;height:460px;border:5px;color:ffa500;float:left;margin:left:0;">
<h2 style="align:left;margin-left:30px;"><i>Click on Your Choice :</i></h2><br>
<h3 style="align:left;margin-left:30px;color:blue;"><a href="listmysubjectresult.php" style="text-decoration:none;color:blue;"><i>* List My Subject Results</a><br><br><br><br>
<a href="addresult.php" style="text-decoration:none;color:blue;">
* Add/Update My Subject Results</i></a></h3>
</div>
<div id="content2" style="width:1030px;height:460px;float:left;margin-right:0px;">
</div>
</html>