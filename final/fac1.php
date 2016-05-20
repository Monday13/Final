<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appling for SDU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="sdu.png" class="img-responsive" style="width:60px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="fac.php">Faculties</a></li>
        <li><a href="price.php">Prices</a></li>
        <li><a href="comm.php">Comments</a></li>
        <li><a href="cont.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="Sign.php">Sign-up</a></li>
      </ul>
    </div>
  </div>
</nav>

<div style="height:835px; width:60%; margin-left:20%;border:5px solid black;border-radius:10px;">

<div style="padding:50px;">

<h1 sty>FACULTIES</h1>

<p>Engineering and Natural Sciences</p>
<ol>
<?php  
  $conn=new mysqli("Localhost","root","","final");
  $sql = "SELECT * FROM eng";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<li>".$row['prof']."</li>";}} 
$conn->close();
?>
</ol>

<p>Law and Social-Humanitarian Sciences</p>
<ol>
<?php  
  $conn=new mysqli("Localhost","root","","final");
  $sql = "SELECT * FROM law";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<li>".$row['prof']."</li>";}} 
$conn->close();
?>
</ol>

<p>Philology and Educational Sciences</p>
<ol>
<?php  
  $conn=new mysqli("Localhost","root","","final");
  $sql = "SELECT * FROM phyl";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<li>".$row['prof']."</li>";}} 
$conn->close();
?>
</ol>

<p>Economics and Administrative Sciences</p>
<ol>
<?php  
  $conn=new mysqli("Localhost","root","","final");
  $sql = "SELECT * FROM eco";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<li>".$row['prof']."</li>";}} 
$conn->close();
?>
</ol>
</div>
</div>

<footer class="container-fluid text-center">
  <p>Duisenbek Temir 1EN03E / SDU / Kaskelen 2016</p>
</footer>

</body>
</html>
