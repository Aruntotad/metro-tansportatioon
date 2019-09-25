<?php 
include('c.php');
?>
<!doctype html>
<html>
<head>
	<title> Train Search </title>
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
         <label for="tab-1" class="tab" style="font-size:48px;">Train Search</label><br>
         <div class="login-form">

        <form method="post" class="sign-in-htm" action="search.php"><br><br>
            <input type="hidden" name="submitted" value="true" />
            <br>
            <font size=6 color="white">
                <label><strong> Search Category : </strong>
                    <select name="category">
                        <option value="Train_no">Train number</option>
                        <option value="Train_name">Train name</option>
                        <option value="Available_on">Available_on</option>
                    </select>
                </label>
        <br><br>
        <label> <strong>Search Criteria : </strong><strong><br><input type="text" name="criteria" required /></strong></label>
        <br><br>
                <input type="submit" name="submit" value="search"/><br><br>            </font>
                  <a href="http://localhost/php/traindetails.php">Veiw Train Details</a>
            </form>
        </div>
      </div>
         </div> 
    </center>
<?php
if(isset($_POST['submitted']))
{
$category=$_POST['category'];
$criteria=$_POST['criteria'];
$query= "select * from trains where ".$category."='$criteria'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
   $count = mysqli_num_rows($result);
if ($count >= 1){
echo"<table>";
echo "<br><tr><th>Train_number</th><th>Train_name</th><th>Source</th><th>Destination</th><th>Time</th><th>Available_on</th></tr>";
	while($row= mysqli_fetch_array($result)) {
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
echo "</td></tr>";
} 
echo "</table>";
}
    else
       {
           echo "<br><font color=orange size=14px>Invaild Input, Try Again.</font>";
       }
    }
?><br><br><br><br>
 <?php include('includes/footer.php'); ?>   
   
</body>
</html>
