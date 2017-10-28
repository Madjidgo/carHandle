<?php
require 'Modeles/entities/ConnectBdd.php';

$manager = new VehiculeManager($db);
/**
 * [if description]
 * @var [type]
 */

if (isset($_POST['km']) && isset($_POST['mark']) && isset($_POST['powwer']) && isset($_POST['whell']) && isset($_POST['helmet']) && isset($_POST['food']) && isset($_POST['type']) && isset($_POST['sunroof'])){

  if($_POST['type'] == 'Moto') {
    $type = new Moto($_POST);
    $manager->add($type);
  }

  else if($_POST['type'] == 'Truc') {
      $type = new Truc($_POST);
      $manager->add($type);
}
  else if($_POST['type'] == 'Car') {
      $type = new Car($_POST);
      $manager->add($type);


  header("location: index.php");
}
}
/**
 * [else description]
 * @var [type]
 */
else if (isset($_POST['delete']))
{
  $delete = $_POST['id'];
  $manager->delete($delete);
  header ("Location: index.php");
}

/**
 * [if description]
 * @var [type]
 */

 else if(isset($_POST['km']) && isset($_POST['mark']) && isset($_POST['powwer']) && isset($_POST['whell']) &&  isset($_POST['id']))
{

  if(isset($_POST['helmet']) && $_POST['type'] == 'Moto') {
    $type = new Moto($_POST);
    $manager->update($type);
  }

  else if( isset($_POST['food']) && $_POST['type'] == 'Truc') {
      $type = new Truc($_POST);
      $manager->update($type);
}
  else if(isset($_POST['sunroof']) && $_POST['type'] == 'Car') {
      $type = new Car($_POST);
      $manager->update($type);


  header("location: index.php");
}
}



$vehicules = $manager->getList();


require 'Views/Vehicule.php';
