<?php
require 'Modeles/entities/ConnectBdd.php';

$manager = new VehiculeManager($db);
/**
 * [if description]
 * @var [type]
 */

if (isset($_POST['km']) && isset($_POST['mark']) && isset($_POST['powwer']) && isset($_POST['whell']) && isset($_POST['helmet']) && isset($_POST['food']))
{
  foreach($_POST as $key=>$value)
  {
    $vehicule_post[$key]=filter_var($value, FILTER_SANITIZE_STRING);
  }
  $vehicule = new Vehicule($vehicule_post);
  $manager->add($vehicule);
  header("location: index.php");
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

else if(isset($_POST['km']) && isset($_POST['mark']) && isset($_POST['powwer']) && isset($_POST['whell']) && isset($_POST['helmet']) && isset($_POST['food']) && isset($_POST['id']))
{
  $vehicule = new Vehicule($_POST);
$maneger->update($vehicule);
}




$vehicules = $manager->getList();



require 'Views/Template/Vehicule.php';
