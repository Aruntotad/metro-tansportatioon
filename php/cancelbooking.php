
<!doctype html>
<html>
<head>
	<title> Cancel Booking </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="/php/style/login.css">
</head>
<body style="color:antiquewhite;">
    <link href="/php/style/profile.css" rel="stylesheet" id="bootstrap-css">
     <link rel="stylesheet" href="/php/style/table.css">

<div style="background-image:url(h2.png);background-repeat: no-repeat;height: 200px;background-size: center;"> <br><br>
    <img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">

    <div  style="text-align:center ;font-size: 20px; color:white" >
        <h1 style="font-size:300%">METRO TRANSPORTATON </h1>
    
    </div>
</div>
    
    
    <center>
          <?php 
    if(isset($_REQUEST["succ"]))
	$msg="Successfully Cancelled";
    ?>
    <p style="color:white;font-size:35px;">
    <?php if(isset($msg))
    {	
    echo $msg;
    }
    ?>
    </p>
        <div class="login-wrap">
        <div class="login-html">
         <div class="login-form">
    <form method="post" >
<input type="hidden" name="submitted" value="true" />
    <font size=6 color="black">
<label><strong> Select Category : </strong>
<select name="category">
<option value="username">username</option>
</select>
</label>
        <br><br>
        <label> <strong>User Name : </strong><strong><input type="text" name="criteria" required /></strong></label>
        <br><br>
<input type="submit" name="submitted" value="Delete"/>
            <br><br>
    </font>
</form>

    <?php
if(isset($_POST['submitted']))
{
if(empty($_POST['']))
{
include('c.php');
$category=$_POST['category'];
$criteria=$_POST['criteria'];
if(true)
$query= "delete from travel where ".$category."='$criteria'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if($result)
    {
    header("location:deletetrain.php?succ=1");
    }

    else
       {
           echo "<br><font color=orange size=14px>Invaild Input, Try Again.</font>";
       }
        }}

?>
 </div></div></div>
    </center>
    </body>
</html>