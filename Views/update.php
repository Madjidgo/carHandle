<?php include("Views/Template/header.php");  ?>

 <body ng-controller="RegisterCtrl" ng-app="myApp">
  <div class="container">
    <div id="signup">
       <div class="signup-screen">

          <div class="space-bot text-center">
             <h1>CHANGE</h1>
            <div class="divider"></div>
          </div>

            <form class="form-register" method="post" name="" action="index.php" >
<!-- id -->
  <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">id</label>
     <div class="col-10">
       <input class="form-control" type="number" name="id" value= '<?php echo $vehicule->getId() ?>' required>
     </div>
 </div>

<!-- mark -->
 <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">Mark</label>
     <div class="col-10">
     <input class="form-control" type="text" name="mark" value= '<?php echo $vehicule->getMark() ?>' required>
     </div>
 </div>

<!-- km -->
 <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">KM</label>
     <div class="col-10">
     <input class="form-control" type="number" name="km" value= '<?php echo $vehicule->getKm() ?>' required>
     </div>
 </div>

<!-- whell -->
 <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">Whell</label>
     <div class="col-10">
     <input class="form-control" type="number" name="whell" value= '<?php echo $vehicule->getWhell() ?>' required>
     </div>
 </div>

<!-- power -->
 <div class="form-group row">
     <label for="example-text-input" class="col-2 col-form-label">Power</label>
     <div class="col-10">
     <input class="form-control" type="number" name="powwer" value= '<?php echo $vehicule->getPowwer() ?>' required>
     </div>
 </div>


<!-- food -->
             <?php if (method_exists($vehicule, 'getFood')) {
                  ?>
                              <div class="form-group row">
                   <label for="example-text-input" class="col-2 col-form-label">Food</label>
                   <div class="col-10">
                     <input class="form-control" type="text" name="food" value= '<?php echo $vehicule->getFood() ?>'>
                   </div>
                 </div>
            <?php } ?>

<!-- helmet -->
             <?php if (method_exists($vehicule, 'getHelmet')){
              ?>
              <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Helmet</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="helmet" value= '<?php echo $vehicule->getHelmet() ?>'>
                    </div>
                  </div>
             <?php } ?>

<!-- sunroof -->
              <?php if (method_exists($vehicule, 'getSunroof')){
               ?>
               <div class="form-group row">
                     <label for="example-text-input" class="col-2 col-form-label">Sunroof</label>
                     <div class="col-10">
                       <input class="form-control" type="text" name="sunroof" value= '<?php echo $vehicule->getSunroof() ?>'>
                     </div>
                   </div>
              <?php } ?>


               <input type="hidden" name="type" value='<?php echo $vehicule->getType() ?>'>
                 <input class="btn btn-primary env" type="submit" name="submit" value="Envoyer" >

               </div>
              </form>
            </div>
         </div>
 </body>
 <?php include("Views/Template/footer.php"); ?>
