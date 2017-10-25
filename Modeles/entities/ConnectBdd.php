<?php
 try
     {
       $db = new PDO('mysql:host=localhost;dbname=cars;charset=utf8', 'phpmyadmin', 'maD24101975');
   }

   catch (Exception $e)

   {

       die('Erreur : ' . $e->getMessage());

   }
