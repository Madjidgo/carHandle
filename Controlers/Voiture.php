<?php

require 'Modeles/entities/ConnectBdd.php';
require 'Modeles/entities/VehiculeManager.php';

$manager = new VehiculeManager($db);

$vehicule =$manager->get($_GET['id']);

require 'Views/update.php';
