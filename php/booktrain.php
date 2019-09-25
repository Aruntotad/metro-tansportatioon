
<!doctype html>
<html>
<head>
	<title> Book Train </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="/php/style/table.css">
</head>
<body style="color:antiquewhite;">
    <link href="/php/style/profile.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/php/style/login.css">
<link rel="stylesheet" href="/php/style/payment.css">
<div style="background-image:url(h2.png);background-repeat: no-repeat;height: 200px;background-size: center;"> <br><br>
    <img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">

    <div  style="text-align:center ;font-size: 20px; color:white" >
        <h1 style="font-size:300%">METRO TRANSPORTATON </h1>
    
    </div>
</div>
    <center>

  <div class="login-wrap">
        <div class="login-html">
         <div class="login-form">

    <form method="post" class="sign-in-htm"  style="color:white; font-size:18px;">
		<label>Train Number :</label>
		<input type="text" name="tno" required>
<br><br>
		<label>UserName :</label>
		<input type="text" name="uname" required>
    <br><br><br>
		<button type="submit" name="sub">Book Ticket</button>
           <br>
        </form>
            </div>
      </div>
    </div>
        </center>
    <center>
    <?php   
    session_start();    
if(isset($_POST['sub']))
    {
    $a = $_POST['tno'];
    $b = $_POST['uname'];
if(!empty($a) || !empty($b)) {
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
        $INSERT = " INSERT Into travel (train_no, Username) values(?, ?)";
  
        if(true) {
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ss", $a, $b);
            $stmt->execute();
       echo " <font color=white size=35px>Booking Successful</font>";
        }
}
           
} else {
    echo "All field are required";
    die();
}
    }
?>
        </center>
    
     <?php
    include('c.php');
    if(isset($_REQUEST['sub']))
    {
        $username = $_POST['uname'];
if(empty($_POST['']))
{
if(true)
    $query= " select * from travel t1, trains t, fare f, users u where t1.train_no=t.Train_no and t1.username=u.username and f.Train_no=t.Train_no and t1.username='$username'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     echo"<table>";
echo "<tr><th>Name</th><th>Train Number</th><th>Train Name</th><th>Source</th><th>Destination</th><th>Available_On</th><th>Distance(KM)</th><th>Fare(RS)</th></tr>";
while($row=mysqli_fetch_array($result)) {
echo "<tr><td>";
echo $row['username'];
echo "</td><td>";
echo $row['Train_no'];
echo "</td><td>";
echo $row['Train_name'];
echo "</td><td>";
echo $row['source'];
echo "</td><td>";
echo $row['destination'];
echo "</td><td>";
echo $row['Available_on'];
echo "</td><td>";
echo $row['distance in km'];
echo "</td><td>";
echo $row['fare'];
echo "</td></tr>";
}
echo "</table>";
}
    }
?>
    
    </body>
</html>