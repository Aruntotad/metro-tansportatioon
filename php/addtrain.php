<!doctype html>
<html>
<head>
	<title> Add New Train Details </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
    <link href="/php/style/profile.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="/php/style/login.css">
</head>
<body style="color:antiquewhite;">
 
<div style="background-image:url(h2.png);background-repeat: no-repeat;height: 200px;background-size: center;"> <br><br>
    <img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">

    <div  style="text-align:center ;font-size: 20px; color:white" >
        <h1 style="font-size:300%">METRO TRANSPORTATON </h1>
    
    </div>
</div>

    <h2 style="color:black; background-color:orange;"><Center> Add New Train Detail  </Center></h2>
    <center>
<?php 
    if(isset($_REQUEST["succ"]))
	$msg="Successfully Added New Train Information";
    ?>
    <p style="color:white;font-size:35px;">
    <?php if(isset($msg))
    {	
    echo $msg;
    }
    ?>
    </p>
    </center>
<center>
  <div class="login-wrap">
        <div class="login-html">
         <div class="login-form">

    <form method="post" class="sign-in-htm"  style="color:black; font-size:18px;">
		<label>Train Number :</label>
		<input type="text" name="tno" required>
<br><br>
		<label>Train Name :</label>
		<input type="text" name="tname" required>
   <br><br>
		<label>Source :</label>
        <input type="text" name="source" required>
<br><br>
        <label>Destination :</label>
        <input type="text" name="destination" required>
        <br><br>
		<label>Time :</label>
        <input type="time" name="time" required>
  <br><br>
		<label>Available On :</label>
		<input type="text" name="available" required>
    <br><br><br>
		<button type="submit" name="sub">ADD TRAIN</button>
           <br>
        </form>
            </div>
      </div>
    </div>
        </center>
    
    <?php   
    session_start();    
if(isset($_POST['sub']))
    {
    $a = $_POST['tno'];
    $b = $_POST['tname'];
    $c = $_POST['source'];
    $d = $_POST['destination'];
    $e = $_POST['time'];
    $f = $_POST['available'];
if(!empty($a) || !empty($b) || !empty($c) || !empty($d) || !empty($e) || !empty($f)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "Arun";
    
    // Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword,$dbname);

    if(mysqli_connect_error()) {
        die('connect error('.mysqli_connect_error().')'. mysqli_connect_error());
    }
    else {
        $INSERT = " INSERT Into trains (Train_no, Train_name, Source, Destination, Time, Available_on) values(?, ?, ?, ?, ?, ?)";
  
        if(true) {
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssis", $a, $b, $c, $d, $e, $f );
            $stmt->execute();
        header("location:addtrain.php?succ=1");
        }
}
           
} else {
    echo "All field are required";
    die();
}
    }
?>
    </body>
</html>
