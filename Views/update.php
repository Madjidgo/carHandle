<?php include("Views/Template/header.php");  ?>
<h2>Formulaire update</h2>


<body ng-controller="RegisterCtrl" ng-app="myApp">
 <div class="container">
   <div id="signup">
      <div class="signup-screen">

         <div class="space-bot text-center">
            <h1>Change</h1>
           <div class="divider"></div>
         </div>

           <form class="form-register" method="post" name="" action="index.php" >
	            <div class="input-field col s6">
              <input  type="number" class="validate" name="id"  value= '<?php echo $vehicule->getId() ?>' required>
              <label >Id</label>
            </div>

            <div class="form-group row">
              <div class="col-10">
              <label >Mark</label>
                <input  type="text" class="validate" name="mark"  value= '<?php echo $vehicule->getMark() ?>'>
             </div>
           </div>

             <div class="input-field col s6">
              <input  type="number" name="km"  value= '<?php echo $vehicule->getKm() ?>'  required>
              <label>KM</label>
             </div>

             <div class="input-field col s6">
              <input type="number" name="whell"  value= '<?php echo $vehicule->getWhell() ?>'  required>
              <label for="email">Whell</label>
             </div>

             <div class="input-field col s6">
              <input type="number" name="powwer"  value= '<?php echo $vehicule->getPowwer() ?>'  required>
              <label >Powwer</label>
             </div>

             <?php if (method_exists($vehicule, 'getHelmet')){
              ?>
             <div class="input-field col s6">
              <input  type="text" name="helmet"  value= '<?php echo $vehicule->getHelmet() ?>'  required>
              <label>Helmet</label>
             </div>
            <?php } ?>

              <?php if (method_exists($vehicule, 'getFood')) {
                  ?>
             <div class="input-field col s6">
              <input  type="text" name="food"  value= '<?php echo $vehicule->getFood() ?>'  required>
              <label >Food</label>
             </div>
             <?php
           }
           ?>
              <input type="hidden" name="type" value='<?php echo $vehicule->getType() ?>'>
                <input type="submit" name="submit" value="Envoyer" placeholder="">

              </div>
             </form>
           </div>
        </div>
    </div>
</body>
<?php include("Views/Template/footer.php"); ?>
