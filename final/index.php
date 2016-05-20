<?php
session_start();
?>
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
      <?php
  if (isset($_SESSION['email'])) {
        echo "
        <li><a href=\"Logout.php\"><span class=\"glyphicon glyphicon-log-in\"></span>LogOut</a></li>";} 
      else{
        echo "
        <li><a href=\"Login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>Login</a></li>
        <li><a href=\"Sign.php\">Sign-up</a></li>  ";
    }?>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="slider1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Outside view</h3>
          <p>New Campus</p>
        </div>      
      </div>

      <div class="item">
        <img src="slider2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Inside view</h3>
          <p>Modern design</p>
        </div>      
      </div>

      <div class="item">
        <img src="slider3.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Student House</h3>
          <p>With all things that you need</p>
        </div>      
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Best Choise</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="image1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Active Student's Life</p>
    </div>
    <div class="col-sm-4"> 
      <img src="image2.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Best Tutors</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>If you want to study with students from different countries and want to take knowledge from the best teachers, apply to our university!
       	Because we are interested to inprove oyur skillz, and after graduating you will not have some problems with getting job! It will be 4 best years of your life!
       	Our students always want to help someone, it is good opotunity for everyman to be graduating our university! Hurry Up! We have just few scolarships!
       	Don't be late!
       </p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Duisenbek Temir 1EN03E / SDU / Kaskelen 2016</p>
</footer>

</body>
</html>
