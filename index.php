<?php
function autoloader($class){
  require 'Modeles/entities/'.$class.'.php';
}
spl_autoload_register( 'autoloader');

require 'Views/Vehicule.php';
