
<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
     <link rel="stylesheet" href="/php/style/style1.css">
  <link rel="stylesheet" href="/php/style/header.css">
    <style>
            .button {
    background-color: whitesmoke; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
        .button4 {border-radius: 15px;}
    </style>
</head>
<body style=" color:black;">
 <div style="background-image:url(h2.png);      
background-repeat: no-repeat; 
 height: 200px;
 background-size: center;">
    <br> 
<img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">
         <br>

<div  style="text-align:center ;font-size: 20px; color:white" >
<h1 style="font-size:300%">METRO TRANSPORTATON </h1>
         <br>
    <br><br><br><br><br>
    </div>
    </div>
    <button  class="button button4"><a href="http://localhost/php/login.php">Go Back</a></button>
    <center>
      <img src="/php/avatar/register.jpg" alt="Avatar" class="avatar">
    </center>
<div style="width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: orange;
	text-align: center;
	border: 1px solid red;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;">
  	<h2>Register</h2>
</div>
    
<form method="post" action="insert.php">
    	
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" required>
	</div>
    
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" required>
	</div>
    
       
    <div class="input-group">
		<label>Contact Number</label>
        <input type="text" name="contactno" required>
	</div>
    
    <div class="input-group">
		<label>Gender</label>
     <input type="text" name="gender" required>
  
	</div>
    
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" required>
	</div>
    
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
       <center>
           <br>
         <?php 
        if(isset($_REQUEST["err"]))
	$msg="Username or Email Already Exist! Try Again";
        ?>
        <p style="color:red; ">
            <?php if(isset($msg))
        {
	   echo $msg;
        }
            ?>
            </center>
        
	</div>
	<p>
		Already a member ? <a href="login.php">Login in</a>
	</p>
    <br>
</form><br>
  <?php include('includes/footer.php'); ?>  
</body>
</html>