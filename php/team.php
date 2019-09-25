<!doctype html>
<html>
<head>
	<title> Team </title>
	<meta charset="UTF-8">
	<meta name="veiwport"  content="width=device-width,initial-scale=1.0">
	<style>

    html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: right;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
        * {box-sizing: border-box;}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 16px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 20px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
     color: green;
  font-size: 30px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

	</style>
        <link rel="stylesheet" href="/php/style/header.css">
</head>
<body>
 <div style="background-image:url(h2.png);      
            background-repeat: no-repeat; 
 height: 200px;
 background-size: center;">
    <br> 
<img src="logo.jpg" style="width:130px; height:130px; float:left;">
    <img src="logo.jpg" style="width:130px; height:130px; float:right;">
         <br>

<div  style="text-align:center ;font-size: 20px; color:DarkOrchid " >
<h1 style="font-size:300%">METRO TRANSPORTATON </h1>
         <br>
    <br><br>
    </div>
        <br>
    </div>
<div class="header">
  <a href="http://localhost/php/metrohome.php" class="logo">Namma Metro</a>
  <div class="header-right">
    <a href="http://localhost/php/metrohome.php">HOME</a>
    <a href="http://localhost/php/login.php">LOGIN </a>
    <a href="http://localhost/php/admin.php">ADMIN LOGIN </a>
    <a href="http://localhost/php/traindetails.php">TRAIN DETAILS </a>
    <a href="http://localhost/php/search.php">SEARCH </a>

  </div>
</div>
    <br><br><br><br><br>
  <div class="column">
    <div class="card">
      <img src="medha.jpg" alt="MEDHA" style="width:100%">
      <div class="container">
        <h2 style="font-size:280%;color:black;">MEDHA B</h2>
        <p style="font-size:160%;color:black;">medhab14126@gmail.com</p>
        <p class="button">Contact Number: 7411781005</p>
      </div>
    </div>
  </div>
    <div class="row">
  <div class="column">
    <div class="card">
      <img src="arun.jpg" alt="ARUN" style="width:100%">
      <div class="container">
        <h2 style="font-size:280%;color:black;">ARUN TOTAD</h2>
        <p style="font-size:160%;color:black;">aruntotad1703@gmail.com</p>
        <p class="button">Contact Number: 9916995091</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
