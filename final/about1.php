<?php session_start(); 

 if (isset($_POST['head'])) {
   $head=$_POST['head'];
   $img=$_POST['img'];
   $text=$_POST['text'];

  $conn= new mysqli("Localhost","root","","final");
    $sql1 = "UPDATE about SET head ='$head' WHERE id='1' " ;
    $sql2 = "UPDATE about SET img ='$img' WHERE id='1' " ;
    $sql3 = "UPDATE about SET tex ='$text' WHERE id='1' " ;

  
  $result=$conn->query($sql1);
  $result2=$conn->query($sql2);
  $result3=$conn->query($sql3);
}
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
        <li><a href="about1.php">About</a></li>
        <li><a href="coment1.php">Comments</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>

<div style="text-align:center; height:835px; width:60%; margin-left:20%;border:5px solid black;border-radius:10px;">
    <form method="post">
Header:<input type="text" name="head">
Img:<input type="text" name="img">
Text:<input type="text" name="text">
<input type="submit"> 
  </form>
  <br>

</div>

<footer class="container-fluid text-center">
  <p>Duisenbek Temir 1EN03E / SDU / Kaskelen 2016</p>
</footer>

</body>
</html>

