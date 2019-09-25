<?php 
include('c.php');
?>
<!doctype html>
<html>
<head>
	<title> Fare Search </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="/php/style/header.css">
    <link rel="stylesheet" href="/php/style/header2.css">
    <link rel="stylesheet" href="/php/style/table.css">
     <link rel="stylesheet" href="/php/style/login.css">
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
    <a class="active"  href="http://localhost/php/search.php">SEARCH </a>
 </div>
</div>
<ul style="text-align:center;background-color:navajowhite; float:right;font-size:120%;">
    <li><a href="http://localhost/php/search.php"> Train </a></li>
     <li><a href="http://localhost/php/faresearch.php"> Fare </a></li>
    <li><a href="http://localhost/php/query.php"> Query </a></li>
</ul>
    <br><br><br><br><br><br><br>

    <center>
  <div class="login-wrap">
        <div class="login-html"><br><br><br>
         <label for="tab-1" class="tab" style="font-size:50px;">fare Search</label><br>
         <div class="login-form">

<form method="post" class="sign-in-htm"  action="faresearch.php"><br><br><br><br>
<input type="hidden" name="submitted" value="true" />
   
<font size=6 color="white">
    <label> <strong>Source : </strong><strong><input type="text" name="Source" required /></strong></label>
    <br><br>
    <label> <strong>Destination : </strong><strong><input type="text" name="Destination" required /></strong></label>
    <br><br>
<input type="submit" value="Search"/><br><br><br>
    </font>
    <a href="http://localhost/php/fare.php">Veiw Fare Details</a>

</form>
        </div>
      </div>
    </div>    
<?php
if(isset($_POST['submitted']))
{ 
if(empty($_POST['']))
{
$Source=$_POST['Source'];
$Destination=$_POST['Destination'];
if(true)
$query= "select * from fare where source='$Source' and destination='$Destination'";
$result = $conn->query($query);
$count = mysqli_num_rows($result);
if ($count >= 1){
echo"<table>";
echo "<tr><th>Train_number</th><th>Source</th><th>Destination</th><th>Distance</th><th>Fare</th></tr>";
while($row= $result->fetch_assoc()) {
echo "<tr><td>";
echo $row['Train_no'];
echo "</td><td>";
echo $row['source'];
echo "</td><td>";
echo $row['destination'];
echo "</td><td>";
echo $row['distance in km'];
echo "</td><td>";
echo $row['fare'];
echo "</td></tr>";
}
echo "</table>";
    }
      else
       {
           echo "<br><font color=orange size=14px>Invaild Input, Try Again.</font>";
       }
}
}
?><br><br><br><br>
 <?php include('includes/footer.php'); ?>   
    </center>
       </body>
</html>