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
<?php
include 'connect.php';
session_start();
$login = $_SESSION['login'];
$pass_log  = $_SESSION['password'];
$sql = mysqli_query($connect, "SELECT * FROM tb_user WHERE email = '$login'");

while($line = mysqli_fetch_array($sql)) {
  $password = $line['password'];
  $level = $line['level'];
  $id_user = $line['id_user'];
}

if($pass_log == $password && $level == 1){
  date_default_timezone_set('America/sao_paulo');
    $title = $_POST['title'];
    $content = $_POST['content'];
    $registry = false;

    if(!empty($title)  && !empty($content)) {
      $registry = true;
   }else {
     header('location: formtexts.php');
   }

   $date = date('Y-m-d');
   $hour = date('H:i:s');
   $page = 2;
  if($registry == true) {
     mysqli_query($connect, "INSERT INTO tb_posts(title,text, date, hour, page, id_user) VALUES('$title', '$content', '$date', '$hour', '$page', '$id_user') ");
  }
   header('location: formtexts.php');
 }else {
   echo "<div class=jumbotron>";
   echo "<p class=jumbotron-message>Post making  not complete, please try again...</p>";
   echo "</div>";

 }
?>

</body>
</html>
