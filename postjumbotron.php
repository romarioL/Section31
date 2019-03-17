<div class="postjumbotron animated fadeInRight">
  <?php
include "connect.php";

 $sql = mysqli_query($connect, "SELECT * FROM tb_posts WHERE page = 1 ORDER BY id_post DESC;");

 while($line = mysqli_fetch_array($sql)) {
     $id = $line['id_post'];
     $title = $line['title'];
     $content = $line['text'];
  ?>
  <div class="post">
    <h3 class="postjumbotron-title"><?php echo $title; ?></h3>
    <p class="post-text"><?php echo $content; ?></p>
    <a href="" class="button-primary">See more</a>
  </div>

<?php } ?>
</div>
