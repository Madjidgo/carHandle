<?php
require 'Views/Template/header.php';
require 'Modeles/entities/ConnectBdd.php';
require 'Modeles/entities/vehiculeManager.php';

$manager = new VehiculeManager($db);

$vehicule =$manager->get($_GET['id']);

require 'Views/update.php';
require 'Views/Template/footer.php';
