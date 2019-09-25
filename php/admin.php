
    <!doctype html>
<html>
<head>
	<title> Admin login </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="/php/style/header.css">
    <link rel="stylesheet" href="/php/style/login.css">
</head>
<body>    
<div style="background-image:url(h2.png);background-repeat: no-repeat;height: 200px;background-size: center;"> <br><br>
    <img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">

    <div  style="text-align:center ;font-size: 20px; color:white" >
        <h1 style="font-size:300%">METRO TRANSPORTATON </h1>
         <br><br><br><br>
    </div>
</div>
    
<div class="header">
 <a href="http://localhost/php/metrohome.php" class="logo">Namma Metro</a>
 <div class="header-right">
    <a href="http://localhost/php/metrohome.php">HOME</a>
    <a href="http://localhost/php/login.php">LOGIN </a>
    <a  class="active"  href="http://localhost/php/admin.php">ADMIN LOGIN </a>
    <a href="http://localhost/php/traindetails.php">TRAIN DETAILS </a>
    <a href="http://localhost/php/search.php">SEARCH </a>
 </div>
</div>
<br><br><br>

<center>
<img src="/php/avatar/admin.png" alt="Avatar" class="avatar">
     <div class="login-wrap">
        <div class="login-html">
            <?php 
if(isset($_REQUEST["err"]))
$msg="Invalid AdminName or Password";
?>
<p style="color:red;">
<?php if(isset($msg))
{	
echo $msg;
}
?>
</p>
         <label for="tab-1" class="tab" style="font-size:40px;">ADMIN LOGIN</label><br>
         <div class="login-form">
         <div class="login-form">
    <form  class="sign-in-htm"  action="adminprofile1.php" method="post">
    <br>
        <div class="group">
          <label for="user" class="label" style="text-align:left; font-size:20px; ">Admin Name</label><br>
          <input id="Adminname" name="uname" type="text" class="input" placeholder="Enter Your Admin    Name" required="">
            <br>
          <label for="pass" class="label" style="text-align:left;font-size:20px; ">Password</label><br>
          <input id="password" name="upassword" type="password" class="input" data-type="password" placeholder="Enter Your Password" required="">
            <br><br>
          <input type="submit" class="button" value="Login" name="sub">

        </div>
    </form>
 </div></div>
<hr></div></div><br><br><br><br>
 <?php include('includes/footer.php'); ?>   
</center>
</body>
</html>