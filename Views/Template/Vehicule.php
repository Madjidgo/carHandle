<?php
  include("header.php");
 ?>
 <div class="container">
<div class="row">
<?php
foreach ($vehicules as $key => $value) {
  # code...

 ?>

  <div class="col-sm-3">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title"><?php echo $value['mark'] ?></h3>
        <p class="card-text">km:<?php echo $value['km'] ?></p>
        <p class="card-text">whell:<?php echo $value['whell'] ?></p>
        <p class="card-text">power:<?php echo $value['power'] ?></p>
        <p class="card-text">helmet:<?php echo $value['helmet'] ?></p>
        <p class="card-text">food:<?php echo $value['food'] ?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>




<?php }
 ?>
</div>
</div>
 <?php
   include("footer.php");
  ?>
