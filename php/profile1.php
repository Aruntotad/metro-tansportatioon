<? php //Start the Session
session_start();
?>
<html>
<head>
<title> User Profile </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
</head>
<link href="/php/style/profile.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
   
<div style="background-image:url(h2.png);background-repeat: no-repeat;height: 200px;background-size: center;"> <br><br>
    <img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">

    <div  style="text-align:center ;font-size: 20px; color:white" >
        <h1 style="font-size:300%">METRO TRANSPORTATON </h1>
    
    </div>
</div>

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="user.jpg" alt="Arun"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
<?php 
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
}
if (isset($_SESSION['uname'])){
$username = $_SESSION['uname'];
    echo "" . $username . "";
}else{
   header("location:login.php?err=1");
}
}
?>
                                    </h5>
                                    <h6>
                                       User Profile
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    
                        <a class="profile-edit-btn" name="btnAddMore" href="http://localhost/php/logout.php" value="Logout">Logout</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>OPTIONS</p>
                            <a href="http://localhost/php/payment.php">Recharge</a><br>
                             <a href="http://localhost/php/booktrain.php">BookTickets</a><br>
                             <a href="http://localhost/php/cancelbooking.php">Cancel Booking</a><br>
                            <br/>
                            </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
<?php 
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
}
while($row= $result->fetch_array()) {
   echo $row['serial_no'];
}
}
?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Full Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
<?php 
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
}
while($row= $result->fetch_array()) {
      echo $row['username'];
}
}
?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
<?php 
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
}
while($row= $result->fetch_array()) {
       echo $row['email'];
}
}
?></p>
                                            </div>
                                        </div>
                     
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
<?php 
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
}
while($row= $result->fetch_array()) {
      echo $row['gender'];
}
}
?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <label>Password</label>
                                        </div>
                                            <div class="col-md-6">
                                                <p>
<?php 
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
}
while($row= $result->fetch_array()) {
      echo $row['password'];
}
}
?></p>
                                            </div>
                                        </div>
                                                                      <div class="row">
                                        <div class="col-md-6">
                                            <label>Balance</label>
                                        </div>
                                            <div class="col-md-6">
                                                <p>
<?php 
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
}
while($row= $result->fetch_array()) {
      echo $row['amount'];
}
}
?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    </body>
</html>    