<?php
require 'Modeles/entities/ConnectBdd.php';

$manager = new VehiculeManager($db);


$vehicules = $manager->getList();



require 'Views/Template/Vehicule.php';
