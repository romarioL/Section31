<div class="posts animated fadeInRight">
  <?php
include "connect.php";

 $sql = mysqli_query($connect, "SELECT * FROM tb_posts  ORDER BY id_post DESC LIMIT 3;");

 while($line = mysqli_fetch_array($sql)) {
     $id = $line['id_post'];
     $title = $line['title'];
     $content = $line['text'];
  ?>
  <div class="post">
    <h3 class="post-title"><?php echo $title; ?></h3>
    <p class="post-text"><?php echo $content;?> </p>
  </div>
<?php } ?>

</div>
