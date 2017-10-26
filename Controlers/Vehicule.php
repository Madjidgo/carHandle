<?php
require 'Modeles/entities/ConnectBdd.php';

$manager = new VehiculeManager($db);
/**
 * [if description]
 * @var [type]
 */

if (isset($_Post['km']) && isset($_Post['mark']) && isset($_Post['whell']) && isset($_Post['helmet']) && isset($_Post['food']))
{
        add($_Post['km'],$_Post['mark'],$_Post['whell'],$_Post['helmet'],$_Post['food']);
}



$vehicules = $manager->getList();



require 'Views/Template/Vehicule.php';
