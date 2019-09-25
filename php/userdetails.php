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

    <div  style="text-align:center ;font-size: 20px; color:white " >
        <h1 style="font-size:300%">METRO TRANSPORTATON </h1>
    
    </div>
</div>

    <center>
 
   <h2 style="color:black; background-color:orange;"><Center>User Details </Center></h2>

       </center>   
    <br><br>
   <div >
   <center>
       
         <?php 
// going to use above code 
include('c.php'); 
       $result=mysqli_query($conn,"CALL user_display()") or die("query fail:" .mysqli_error());
    echo"<table>";
        echo "<tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>CONTACT_NO</th><th>GENDER</th><th>PASSWORD</th><th>BALANCE</th><tr>";
       while($row=mysqli_fetch_array($result))
       {
           echo "<tr><td>";
        echo $row['serial_no'].' '; 
        echo "</td><td>";
        echo $row['username'].' '; 
        echo "</td><td>";
		echo $row['email'].' ';
        echo "</td><td>";
        echo $row['contactno'].' ';
        echo "</td><td>";
        echo $row['gender'].' ';
        echo "</td><td>";
		echo $row['password'].'';
        echo "</td><td>";
        echo $row['amount'].'';
        echo "</td></tr>";
             
	} 
         echo "</table>";
?> 
    
</center>
          </div>
    </body>
</html>

