<!doctype html>
<html>
<head>
	<title> Delete User Details </title>
		<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
    <link href="/php/style/profile.css" rel="stylesheet">
 <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="/php/style/backdisp.css">
</head>
<body style="color:antiquewhite;">
 
<div style="background-image:url(h2.png);background-repeat: no-repeat;height: 200px;background-size: center;"> <br><br>
    <img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">

    <div  style="text-align:center ;font-size: 20px; color:DarkOrchid " >
        <h1 style="font-size:300%">METRO TRANSPORTATON </h1>
          </div>  </div>

<?php
    session_start();
    include('c.php');
    if (isset($_SESSION['uname'])){
        $username = $_SESSION['uname'];
$query= "select * from admin WHERE adminname='$username' ";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count >= 1){
    while($row= $result->fetch_assoc()) {
        $a=$row['admin_id'];
        $b=$row['adminname'];
        $c=$row['email'];
        $d=$row['phnno'];
        $e=$row['address'];
        $f=$row['password'];
    }
    }
    }
    ?>
    
<center>

 <h2 style="background-color:orange;"><b><center>Update Admin Details</center></b></h2>
              <?php 
if(isset($_REQUEST["succ"]))
	$msg="Updated Successfully";
?>
<p style="color:red;">
<?php if(isset($msg))
{
	
echo $msg;
}
?>  
<br><br>

        <div style="color:black;" >
        <form method="post" action="update.php" >
            <label>Serial Number :</label>
            <input type="text" name="sno" value="<?php echo "$a" ?>" disabled >
            <br><br>
            <label>Username :</label>
            <input type="text" value="<?php echo "$b" ?>" name="uname"  disabled>
            <br><br>
            <label>Email :</label>
            <input type="email" value="<?php echo "$c" ?>" name="email" required>
            <br><br>
             <label>Phone Number :</label>
            <input type="text" value="<?php echo "$d" ?>" name="phno" required>
                <br><br>
             <label>Address :</label>
            <input type="text" value="<?php echo "$e" ?>" name="address" required>
            <br>
            <br>
        	<input type="submit" value="Update" name="submit"/>


       </form>
        </div>
        <br><br>
          <div style="color:black;" >
            <form method="post" action="updatep.php" >
                <label>New Password :</label>
                <input type="text" name="password" value="<?php echo "$f" ?>" required >
                <br><br>
                  <input type="submit" value="Update" name="submit"/>


    	</form>
      </div>
    </center>
    </body>
</html>