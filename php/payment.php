
<!doctype html>
<html>
<head>
	<title> Recharge </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">

</head>
<body>
    <link href="/php/style/profile.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="/php/style/payment.css">
<div style="background-image:url(h2.png);background-repeat: no-repeat;height: 200px;background-size: center;"> <br><br>
    <img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">

    <div  style="text-align:center ;font-size: 20px; color:white" >
        <h1 style="font-size:300%">METRO TRANSPORTATON </h1>
    
    </div>
</div>

    <center>
  <?php 
if(isset($_REQUEST["succ"]))
{
	$msg="Payment successfull";
}

?>
<p style="color:white; font-size:30px;">
      <font size=6>
<?php if(isset($msg))
{
	
echo $msg;
}
?>
    </font>
       
    </center>

<form class="payment" method="post" action="amount.php">

		<div class="panel panel-default credit-card-box">
			<div class="panel-heading display-table">
				<div class="row display-tr">
					<h3 class="panel-title display-td">Payment </h3>
           
					<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
				</div>
			</div>
		</div>
		<br>
    
		<label for="cardNumber">CARD NUMBER</label>
    
		<input type="text" size="10" class="form-control" name="cardno" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus />
		<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
    
		<label for="name">NAME</label>
    
		<input type="text" size="10" class="form-control" name="uname" placeholder="UserName" autocomplete="cc-name" required />
		<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
    
		<label for="cardExpir">EXPIRATION DATE</label>
    
		<input type="text" size="5" class="form-control" name="exp" placeholder="MM / YY" autocomplete="cc-exp" required />
    
		<label for="cardCVC">CV CODE</label>
    
		<input type="password" size="3" class="form-control" name="cvc" placeholder="CVC" autocomplete="cc-csc" required />
    
		<label for="amount">AMOUNT</label>
    
		<input type="number" class="form-control" name="amt" placeholder="AMOUNT"  />
		<br>
    
		<button class="blueButton" style="float:right;" type="submit" name="submit">Confirm Payment</button>
		<br><br>
</form>
 <? php //Start the Session
session_start();
require('c.php');
if(isset($_REQUEST['sub']))
{
$username = $_POST['uname'];
$password = $_POST['upassword'];

$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['uname'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}

//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['uname'])){
$username = $_SESSION['uname'];

}
    else{
//3.2 When the user visits the page first time, simple login form will be displayed.
   header("location:login.php?err=1");
}
}
?>
    <br>
    

    
 
</body>
</html>