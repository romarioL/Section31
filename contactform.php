<html>
  <head>
    <title>Section 31</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body class="black-body">
    <div class="animated fadeInRight" id="header">
      <?php include 'header.php' ?>
    </div>
<?php
include  "connect.php";
$nome = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'MIME-version: 1.0'. "\r\n";
$headers .= 'content-type: text/html; charset=iso-8859-1'. "\r\n";
$headers .= 'To: Romario Sousa<estreladamanha585@gmail.com>'. "\r\n";
$headers .='From: <contato@section31.com.br>'. "\r\n";
$headers .='Reply-To: <contato@section31.com.br>'. "\r\n";
$to = 'estreladamanha585@gmail.com';
$send = mail($to, $subject, $message, $headers);
if($send) {

   echo "<div class='jumbotron'>";
   echo "<p class=jumbotron-message>Email sent correctly</p>";
   echo "</div>";
}
else {

  echo "<div class=jumbotron>";
  echo "<p class=jumbotron-message>Email not sent. Please try again</p>";
  echo "</div>";


}

 ?>
</body>
</html>
