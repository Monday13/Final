<?php
session_start();
  
if (isset($_POST['name'])) {

  $name=$_POST['name'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $subject=$_POST['subject'];

$conn=new mysqli("Localhost","root","","final");
$sql="INSERT INTO users(name,surname,mail,password,subject) VALUES ('$name','$lname','$email','$password','$subject') ";

if ($conn->query($sql)===TRUE) {
         header("Location: /final/Sign.php");  
}}?>

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


  <div id ="main">
    <div  style="padding:40px;">

<form action="Sign.php" method="post">
      <span class="label label-danger">First name</span>
      <input type="text"  name="name" class="form-control" id="usr" autocorrect=off autocapitalize=words style="width:200px;" required><br>

      <span class="label label-danger">Last name</span>
      <input type="text" name="lname" class="form-control" id="pwd" autocorrect=off autocapitalize=words style="width:200px;" required><br>

      <span class="label label-danger">E-mail</span>
      <input type="text" name="email" class="form-control" id="pwd" autocorrect=off autocapitalize=words style="width:200px;" required><br>

      <span class="label label-danger">Password</span>
      <input type="password" name="password" class="form-control" id="pwd" autocorrect=off autocapitalize=words style="width:200px;" required><br>

      <span class="label label-danger">Subject</span>
      <input type="text" name="subject" class="form-control" id="pwd" autocorrect=off autocapitalize=words style="width:200px;" required><br>

      <input type="submit">
      </form>
    </div>
  </div>
</div>
</body>