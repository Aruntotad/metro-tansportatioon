 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="arun";
// Create a connection object
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?> 
