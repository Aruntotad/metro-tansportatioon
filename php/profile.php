

<!doctype html>
<html>
<head>
	<title> user profile </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
	<style>
        body
        {
            background-image: url(bg-13.jpg);
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover; /* Resize the background image to cover the entire container */

              font:600 16px/18px 'Open Sans',sans-serif;
              margin:0;
            color:#6a6f8c;
            
        }
        
	ul
	{
	list-style-type: none;
	overflow: hidden;
	margin: 0px;
	padding: 5px;
	font-size:20;
    background-color:skyblue;
	}

	li
	{
	float: right;
	}
	
	li a
	{
	display: block;
	color: tomato;
	text-align: right;
	padding: 30px;
	text-decoration: none;
	}
	   
	li a:hover
	{
	background-color:black;
	}	
	      
  th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: center;
  color: #185875;
}

  td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}
    table
  {
	  text-align:  center;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 11em 0;
}

  td,   th {
padding: 15px; 
        }

/* Background-color of the odd rows */
  tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
  tr:nth-child(even) {
	  background-color: #2C3446;
}

  th {
	  background-color: #1F2739;
}

  td:first-child { color: #FB667A; }

  tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

  td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
  td:nth-child(4),
  th:nth-child(4) { display: none; }
}
button {background-color: yellow;} 

	</style>
</head>
<body>
    
    
<div style="background-image:url(h2.png);      
            background-repeat: no-repeat; /* Do not repeat the image */ 
 height: 200px;
 background-size: center; /* Resize the background image to cover the entire container */">
    <br> 
<img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">
         <br>

<div  style="text-align:center; ;font-size: 20px; color:DarkOrchid " >
<h1 style="font-size:300%">METRO TRANSPORTATON </h1>
         <br>
    <br><br>
    </div>
        <br>
    </div>


<div >
<ul style="text-align:center; float: right; font-size:150%;">
    <li><a href="http://localhost/php/complaint.php"> Complaint </a></li>
	<li><a href="http://localhost/php/payment.php"> Recharge </a></li>
    <li><a href="http://localhost/php/profile.php"> Profile</a></li>
</ul>
    <br><br>
</div>
    <div style="text-align:right;font-size:150%;">
    <br><br><br><br>
    <a href="http://localhost/php/updateuser.php" >Update</a>
    <br><br>
    <a href="http://localhost/php/logout.php" >logout</a>
  </div>
  <br><br>

    
    <?php  //Start the Session
session_start();
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
    echo"<table >";
echo "<tr><th>Serial Number</th><th>Username </th><th>Email</th><th>Contact Number</th><th>Gender</th><th>Card Balance</th></tr>";

while($row= $result->fetch_array()) {
echo "<tr><td>";
echo $row['serial_no'];
echo "</td><td>";

echo $row['username'];
echo "</td><td>";

echo $row['email'];
echo "</td><td>";

echo $row['contactno'];
echo "</td><td>";

echo $row['gender'];
echo "</td><td>";
    
echo $row['amount'];
echo "</td><tr>";
} 
echo "</table>";  
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}

//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['uname'])){
$username = $_SESSION['uname'];

}
    else{
//3.2 When the user visits the page first time, simple login form will be displayed.
   header("location:login.php?err=1");
}
}
?>
 


</body>
</html>

