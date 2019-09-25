<? php 
    session_start();
?>
    <!doctype html>
<html>
<head>
	<title> login </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
</head>   
     <link rel="stylesheet" href="/php/style/header.css">
     <link rel="stylesheet" href="/php/style/login.css">
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
    <a  class="active"  href="http://localhost/php/login.php">LOGIN </a>
    <a href="http://localhost/php/admin.php">ADMIN LOGIN </a>
    <a href="http://localhost/php/traindetails.php">TRAIN DETAILS </a>
    <a href="http://localhost/php/search.php">SEARCH </a>
 </div>
</div>
<br><br><br>
    
<center>
<img src="/php/avatar/login.png" alt="Avatar" class="avatar">
     <div class="login-wrap">
        <div class="login-html">
                    
    <?php 
    if(isset($_REQUEST["err"]))
	$msg="Invalid Username or Password";
    ?>
    <p style="color:red;">
    <?php if(isset($msg))
    {	
    echo $msg;
    }
    ?>
    </p>
        
         <label for="tab-1" class="tab" style="font-size:40px;">LOGIN</label><br>
         <div class="login-form">
             
    <form  class="sign-in-htm"  action="profile1.php" method="post">
        <div class="group">
        <br>
          <label for="user" class="label" style="text-align:left; font-size:20px; ">User Name</label>
          <input id="name" name="uname" type="text" class="input" placeholder="Enter your Name" required="" >
        <br><br>
          <label for="pass" class="label" style="text-align:left;font-size:20px; ">Password</label>
          <input id="password" name="upassword" type="password" class="input" data-type="password" placeholder="Enter Your Password" required="">
        <br><br>
          <input type="submit" class="button" value="Login " name="sub">
        </div>

  <div class="hr"></div>
        <div class="foot-lnk">
          <div class="foot-lnk" style="font-size:22px;color: yellow;">
          <br>
          <div class="foot-lnk" style="font-size:22px;color: yellow;">
          <a href="register.php">Create a New Account ? <u>SIGN UP</u></a>
          </div>
        </div>
        </div>
        
    </form>
    </div></div></div>
</center>    <br><br><br><br>
    <?php include('includes/footer.php'); ?>   
</body>
</html>