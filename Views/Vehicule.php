<?php
// header
  include("Views/Template/header.php");
 ?>
 <div class="container">
<div class="row">
<?php
/**
 * [foreach description]
 * @var [type]
 */
foreach ($vehicules as $key => $value) {


 ?>

  <div class="col-sm-4 my-1 ">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title"><?php echo $value['mark'] ?></h3>
        <p class="card-text">km:<?php echo $value['km'] ?></p>
        <p class="card-text">whell:<?php echo $value['whell'] ?></p>
        <p class="card-text">power:<?php echo $value['powwer'] ?></p>
        <p class="card-text">helmet:<?php echo $value['helmet'] ?></p>
        <p class="card-text">food:<?php echo $value['food'] ?></p>

        <div class="row offset-1 ">

        <form action="index.php" method="post">
			     <input type="hidden" name="id" value="<?php echo $value['id']; ?>">

			     <input class="btn btn-primary" type="submit" name="delete" value="supprimer">
         </form>


        <a class="btn btn-danger" href="Voiture.php?id=<?php echo $value['id']?> "role="button">Voir</a>
      </div>
    </div>
    </div>
  </div>




<?php }
 ?>
</div>
</div>

<!-- footer -->
 <?php
   include("Views/Template/footer.php");
  ?>
