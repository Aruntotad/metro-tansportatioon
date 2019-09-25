<!doctype html>
<html>
<head>
	<title> Home </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">

</head>


    <link rel="stylesheet" href="/php/style/header.css">
    
<body>
    
<div style="background-image:url(h2.png);background-repeat: no-repeat;height: 200px;background-size: center;"> <br><br>
    <img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">

    <div  style="text-align:center ;font-size: 20px; color:white " >
        <h1 style="font-size:300%;">METRO TRANSPORTATON </h1>
         <br><br><br><br>
    </div>
</div>
    
<div class="header">
 <a href="http://localhost/php/metrohome.php" class="logo">Namma Metro</a>
 <div class="header-right">
    <a class="active" href="http://localhost/php/metrohome.php">HOME</a>
    <a href="http://localhost/php/login.php">LOGIN </a>
    <a href="http://localhost/php/admin.php">ADMIN LOGIN </a>
    <a href="http://localhost/php/traindetails.php">TRAIN DETAILS </a>
    <a href="http://localhost/php/search.php">SEARCH </a>
  
 </div>
</div>
<br><br><br>
        
<center>
 
       <br>
   <section class="w3-container w3-center w3-content" style="max-width:900px">
    <h2 style="font-size:70px;color:red;">NAMMA METRO</h2>
                <!-- SildeShow -->
        <section>
        <img class="mySlides" src="/php/sildeimg/slide5.jpg"
  style="width:55%; height:50%;" >
        <img class="mySlides" src="/php/sildeimg/slide1.jpg"
  style="width:55%; height:50%;" >
        <img class="mySlides" src="/php/sildeimg/slide2.jpg"
  style="width:55%; height:50%;" >
        <img class="mySlides" src="/php/sildeimg/slide3.jpg"
  style="width:55%; height:90%;" >
        <img class="mySlides" src="/php/sildeimg/slide4.jpg"
  style="width:55%; height:50%;" >
     </section>   

                <!-- Description -->
       <section class="w3-container w3-center w3-content" >
          
        <p class="w3-opacity" style="font-size:20px;color:red;"><i>Welcome to Namma Metro Official Website</i></p>
        <div class="w3-justify" style="font-size:16px;color:cyan;">  <p>Namma Metro, also known as Bengaluru Metro is a metro system serving the city of Bengaluru, India. It is currently the second longest operational metro network in India after Delhi Metro.On the other hand, Namma Metro ranked the 83rd largest metro system in terms of length and 79th largest metro network in terms of number of operating stations in the world. It also contains the first underground metro line in South India.The metro network consists of two colour-coded lines, with a total length of 42.3 kilometres serving 41 stations. The system has a mix of underground, at-grade, and elevated stations using standard-gauge tracks. The metro has an average daily ridership of 315,000 passengers.</p>

        <p>
        The Bangalore Metro Rail Corporation Ltd (BMRCL), a joint venture of the Government of India and the Government of Karnataka, built and operates the Namma Metro.Services operate daily between 05:00 and 23:00 running with a headway varying between 4–20 minutes.The trains are composed of three cars. The power output is supplied by 750 volt direct current through third rail. Namma Metro was the second rail transport system in India to use 750 V DC third rail traction, the first is Kolkata Metro.Construction
            </p>
        </div>
          
       </section>     
       <br><br>           
    </section>
         
</center>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>
    <br>
    <?php include('includes/footer.php'); ?>     
</body>
</html>