<?php
include "connect.php";
session_start();

$login = $_SESSION['login'];
$pass_log =$_SESSION['password'];

$sql = mysqli_query($connect, "SELECT * FROM tb_user WHERE email = '$login'");

while($line = mysqli_fetch_array($sql)) {
  $password = $line['password'];
  $level = $line['level'];
  $id = $line['id_user'];
}

if($pass_log == $password && $level == 2){
}else {
  header('location: index.php');
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Section 31</title>
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
 <link href="css/main.css" rel="stylesheet">
 <link href="css/animate.css" rel="stylesheet">
 </head>
 <body class="black-body">
 <div class="animated fadeInRight" id="header">
   <?php include 'header.php' ?>
 </div>
 <div id="about" class="animated fadeInLeft">
   <?php include 'clientarea.php' ?>
 </div>
 </body>
 </html>
