<!DOCTYPE HTML>
<html>
<?php
session_start();
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
<body bgcolor="#d3d3d3" text="blue" 
<div id="header1" >
<div id="content1" style="height:30px;color:red;">Welcome <?php echo $_SESSION['username'] ?></div>
<div id="content2" style="height:30px;color:red;float:right;margin-right:30px;"><a href="mainpage.php" style="text-decoration:none;color:red;">Logout</a></div>
</div>
<div id="header" style="text-align:center;width:80%;float:left;color:blue">
<h1 style="margin-bottom:0">National Institute of Technology,Tiruchiraappalli, India 620015</h1>
<h2 style="margin-bottom:0">Student Self Evaluation System</h2></div>
<div id="container" style="width 500px;width:5%L; align:right ;color:red;"><img src="nittlogo.png" height="105" width="100"></div><br><br>
<div id="container">
<div id="menu" style="width:300px;border:10px solid darkgrey;background-color:grey;border-radius:20px;padding:10px;float:left;margin:left:0;">
<h2 style="align:left;margin-left:30px;"><i>Click on Your Choice :</i></h2><br>
<h3 style="align:left;margin-left:30px;color:blue;"><a class="head" href="listmysubjectresult.php"><i>* List My Subject Results</a><br><br><br><br>
<a class="head" href="addresult.php" >
* Add/Update My Subject Results</i></a></h3>
</div>
<div id="content2" style="width:1030px;height:460px;float:left;margin-right:0px;">
</div>
</html>