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

    <div  style="text-align:center ;font-size: 20px; color:white " >
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
    <a class="active"  href="http://localhost/php/traindetails.php">TRAIN DETAILS </a>
    <a href="http://localhost/php/search.php">SEARCH </a>
 </div>
</div>
    
<ul style="text-align:center;background-color:navajowhite; float:right; margin-right:10px; font-size:120%;">
        <li><a href="http://localhost/php/traindetails.php"> Train Details </a></li>
     <li><a href="http://localhost/php/fare.php"> Fare Details</a></li>

     <li><a href="http://localhost/php/routes.php"> Routes</a></li>
</ul>
    <br><br><br><br><br><br>
  
    <h2 style="color:black; background-color:orange;"><Center> Train Details </Center></h2>
   
 <button style="position:absolute; right: 0; font-size:22px; background-color:black;"><a href="http://localhost/php/search.php">Search Train</a></button>
        <br><br><br><br>

     <?php 
// going to use above code 
include('c.php'); 
       $result=mysqli_query($conn,"CALL train_display()") or die("query fail:" .mysqli_error());
        echo"<table>";
        echo "<tr><th>Train_number</th><th>Train_name</th><th>Source</th><th>Destination</th><th>Time</th><th>Available_on</th></tr>";
        while($row=mysqli_fetch_array($result))
       {
           echo "<tr><td>";
        echo $row['Train_no'].' '; 
        echo "</td><td>";
        echo $row['Train_name'].' '; 
        echo "</td><td>";
        echo $row['Source'].' ';
        echo "</td><td>";
        echo $row['Destination'].' ';
        echo "</td><td>";
        echo $row['Time'].' ';
        echo "</td><td>";
	    echo $row['Available_on'].'';
        echo "</td></tr>";      
        } 
         echo "</table>";
?> 
 <?php include('includes/footer.php'); ?>   
</body>
</html>
