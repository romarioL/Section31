<!DOCTYPE html>
<html>
<head>
<title>Section 31</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<link href="css/main.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
</head>
<body class="black-body">
  <div class="animated fadeInRight" id="header">
    <?php include 'header.php' ?>
  </div>

<?php
include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$registry = false;

if(!empty($name) && !empty($email) && !empty($password) ) {
  $registry = true;
}else {
  echo "<div class='jumbotron'>";
  echo "<p class=jumbotron-message>Complete all fields</p>";
  echo "</div>";
}



if(@$registry == true) {
  mysqli_query($connect, "INSERT INTO tb_user (name, email, password, level) VALUES ('$name', '$email', '$password', 2)");
  echo "<div class='jumbotron'>";
  echo "<p class=jumbotron-message>Registered successfully</p>";
  echo "</div>";
}else {
  header('location: signup.php');
}

 ?>
