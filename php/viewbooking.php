
<!doctype html>
<html>
<head>
	<title> View Booking </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">

</head>
<body style="color:antiquewhite;">
    <link href="/php/style/profile.css" rel="stylesheet" id="bootstrap-css">
     <link rel="stylesheet" href="/php/style/table.css">

<div style="background-image:url(h2.png);background-repeat: no-repeat;height: 200px;background-size: center;"> <br><br>
    <img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">

    <div  style="text-align:center ;font-size: 20px; color:white" >
        <h1 style="font-size:300%">METRO TRANSPORTATON </h1>
    
    </div>
</div>
    
    
    <h2 style="color:black; background-color:orange;"><Center> Booking Details </Center></h2>
 
     <?php
    include('c.php');
if(empty($_POST['']))
{
if(true)
    $result=mysqli_query($conn,"CALL booking()") or die("query fail:" .mysqli_error());
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
?>

    
    </body>
</html>