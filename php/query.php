<?php 
include('c.php');
?>
<!doctype html>
<html>
<head>
	<title> Train Detail </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="/php/style/header.css">
    <link rel="stylesheet" href="/php/style/header2.css">
    <link rel="stylesheet" href="/php/style/table.css">
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
    <a href="http://localhost/php/admin.php">ADMIN LOGIN </a>
    <a href="http://localhost/php/traindetails.php">TRAIN DETAILS </a>
    <a  class="active"   href="http://localhost/php/search.php">SEARCH </a>
 </div>
</div>
    
<ul style="text-align:center;background-color:navajowhite; float:right;font-size:120%;">
    <li><a href="http://localhost/php/search.php"> Train </a></li>
     <li><a href="http://localhost/php/faresearch.php"> Fare </a></li>
    <li><a href="http://localhost/php/query.php"> Query </a></li>
</ul>
    <br><br><br><br><br><br>
  
    <h2 style="color:black; background-color:orange;"><Center> Train Details </Center></h2>
   
 <button style="position:absolute; right: 0; font-size:22px; background-color:black;"><a href="http://localhost/php/search.php">Search Train</a></button>
        <br><br><br><br>
    <center>
 query 1 
<?php 
if(empty($_POST['']))
{
if(true)
$query= "select * from trains t, fare f where t.Train_no=f.Train_no and t.source=f.source and t.destination=f.destination";
$result = $conn->query($query);
echo"<table >";
echo "<tr><th>Train Number</th><th>Train Name</th><th>Source</th><th>Destination</th><th>Time</th><th>Available On</th><th>Distance</th><th>Fare</th></tr>";
while($row= $result->fetch_array()) {
echo "<tr><td>";
echo $row['Train_no'];
echo "</td><td>";
echo $row['Train_name'];
echo "</td><td>";
echo $row['Source'];
echo "</td><td>";
echo $row['Destination'];
echo "</td><td>";
echo $row['Time'];
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
 query 2 
    <?php 
if(empty($_POST['']))
{
if(true)
$query= "select * from trains t, fare f where t.Train_no=f.Train_no and t.source=f.source and t.destination=f.destination and fare between 10 and 60 and Available_on='Monday' ";
$result = $conn->query($query);
echo"<table >";
echo "<tr><th>Train Number</th><th>Train Name</th><th>Source</th><th>Destination</th><th>Time</th><th>Available On</th><th>Distance</th><th>Fare</th></tr>";
while($row= $result->fetch_array()) {
echo "<tr><td>";
echo $row['Train_no'];
echo "</td><td>";
echo $row['Train_name'];
echo "</td><td>";
echo $row['Source'];
echo "</td><td>";
echo $row['Destination'];
echo "</td><td>";
echo $row['Time'];
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
 query 3   
    <?php 
if(empty($_POST['']))
{
if(true)
$query= "select * from trains t, fare f where t.Train_no=f.Train_no and t.source=f.source and t.destination=f.destination";
$result = $conn->query($query);
echo"<table >";
echo "<tr><th>Train Number</th><th>Train Name</th><th>Source</th><th>Destination</th></tr>";
while($row= $result->fetch_array()) {
echo "<tr><td>";
echo $row['Train_no'];
echo "</td><td>";
echo $row['Train_name'];
echo "</td><td>";
echo $row['Source'];
echo "</td><td>";
echo $row['Destination'];
echo "</td></tr>";
} 
echo "</table>";  
}
?>
        </center><br><br><br><br>
 <?php include('includes/footer.php'); ?>   
</body>
</html>
