<html>
<body>
 
<?php   
    session_start();
             
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

if(!empty($username) || !empty($email) || !empty($contactno) || !empty($gender) || !empty($password)) {
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
     
        $SELECT = "SELECT email From users Where email = ? limit 1";
        $SELECT = "SELECT username From users Where username = ? limit 1";
        $INSERT = " INSERT Into users (username, email, contactno, gender, password) values(?, ?, ?, ?, ?)";
        
        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
         //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssiss", $username, $email, $contactno, $gender, $password );
            $stmt->execute();
            echo "<script>alert('Successfully Registered');</script>";
            header('location:login.php');   
                      
        } 
        else 
        {
                header("location:register.php?err=1");
        }     
}
           
} else {
    echo "All field are required";
    die();
}
    
?>
   </body>
</html>