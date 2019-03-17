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
include "connect.php";

$email = $_POST['email'];
$password=$_POST['password'];

if(!empty($email) && !empty($password)) {

$sql = mysqli_query($connect, "SELECT * FROM tb_user WHERE email = '$email'");

$registry = mysqli_num_rows($sql);

while($line = mysqli_fetch_array($sql)) {
  $password_user = $line['password'];
  $level = $line['level'];
}

if($registry) {
  if($password_user == $password) {
    session_start();
    $_SESSION['login'] = $email;
    $_SESSION['password'] = $password;
    if($level == 1) {
      header('location: admin.php');
    }else{
      header('location: client.php');
    }
  }else {
    echo "<div class='jumbotron'>";
    echo "<p class=jumbotron-message>Incorrect email or password</p>";
    echo "</div>";
  }
}else {
  echo "<div class='jumbotron'>";
  echo "<p class=jumbotron-message>No account yet? Come back and enter the sign up area</p>";
  echo "</div>";
}

}else {
  header('location: login.php');
}
 ?>
