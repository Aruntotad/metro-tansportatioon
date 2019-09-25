<!doctype html>
<html>
<head>
	<title> Train Details </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="/php/style/table.css">
    <link href="/php/style/profile.css" rel="stylesheet">
</head>
<body style="color:antiquewhite;">

<div style="background-image:url(h2.png);background-repeat: no-repeat;height: 200px;background-size: center;"> <br><br>
    <img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">

    <div  style="text-align:center ;font-size: 20px; color:white" >
        <h1 style="font-size:300%">METRO TRANSPORTATON </h1>
    
    </div>
</div>

    <h2 style="color:black; background-color:orange;"><Center> Train Details </Center></h2>
 
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


<br><br>

<br><br>

    </body>
</html>