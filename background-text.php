<h1 class="background-text animated fadeInLeft">Welcome to Section 31</h1>
<a href="main.php" class="button-primary animated fadeInLeft">See more</a>
<div class="links-background">
<?php
include "connect.php";
session_start();
@$email = $_SESSION['login'];
@$sql = mysqli_query($connect, "SELECT * FROM tb_user WHERE email = '$email'");
while($line = mysqli_fetch_array($sql)) {
  $level = $line['level'];
}
if(@$level == 1) {
  echo  " <a href='logout.php' class='link-primary'>Logout</a> ";
  echo   "<a href='admin.php' class='link-primary'>Admin</a>";
}else if(@$level == "" ){
  echo   "<a href='login.php' class='link-primary'>Login</a> ";
  echo   "<a href='signup.php' class='link-primary'>Sign up</a>";
}else {
  echo  "<a href='logout.php' class='link-primary'>Logout</a> ";
  echo   "<a href='client.php' class='link-primary'>User area</a>";
}
 ?>
</div>
