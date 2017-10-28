<?php

/**
 * [CatsManager description]
 */
class VehiculeManager

{
/**
 * [private description]
 * @var [type]
 */
  private $_db;


    /**
     * VehiculeManager constructor.
     * @param $db
     */
    public function __construct($db)

  {

    $this->setDb($db);

  }

  public function setDb($db)
  {
/**
 * [$this->_db description]
 * @var [type]
 */
    $this->_db = $db;

  }
/**
 * [getlist description]
 * @return [type] [description]
 */
  public function getlist()
  {

  $req = $this->_db->prepare('SELECT * FROM Vehicule');
  $req->execute();

  $vehicules = $req->fetchall(PDO::FETCH_ASSOC);
  return $vehicules;
  }

/**
 * [get description]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
  public function get($id){
    $req= $this->_db->prepare('SELECT * FROM Vehicule WHERE id = :id');
    $req->execute(array (
      'id' => $id
    ));
    $vehicules = $req->fetch(PDO::FETCH_ASSOC);

    return new $vehicules['type']($vehicules);
  }

/**
 * [add description]
 * @param [type] $vehicules [description]
 */
  public function add($vehicules){


    $req = $this->_db->prepare('INSERT INTO Vehicule(km,mark,whell,powwer,helmet,food,sunroof,type) VALUES( :km,:mark,:whell,:powwer,:helmet,:food,:sunroof,:type)');


    $req->bindValue(':km', $vehicules->getKm(), PDO::PARAM_INT);
    $req->bindValue(':mark', $vehicules->getMark());
    $req->bindValue(':whell', $vehicules->getWhell(), PDO::PARAM_INT);
    $req->bindValue(':powwer', $vehicules->getPowwer(), PDO::PARAM_INT);
    $req->bindValue(':type', $vehicules->getType());


    if ($vehicules->getType() == 'Truc'){
      $req->bindValue(':food',$vehicules->getFood());
    } else $req->bindValue(':food', null);



 if ($vehicules->getType() == 'Moto'){
    $req->bindValue(':helmet',$vehicules->getHelmet());
  } else $req->bindValue(':helmet', null);


  if ($vehicules->getType() == 'Car'){
     $req->bindValue(':sunroof',$vehicules->getSunroof());
   } else $req->bindValue(':sunroof', null);



  $req->execute();
}


/**
 * [update description]
 * @param  [type] $vehicules [description]
 * @return [type]            [description]
 */
  public function update($vehicules){
    $req = $this->_db->prepare('UPDATE Vehicule SET km = :km, mark = :mark , whell = :whell, helmet = :helmet, food = :food, powwer = :powwer, sunroof = :sunroof WHERE id = :id');
    var_dump($req);


    $req->bindValue(':km', $vehicules->getKm(), PDO::PARAM_INT);
    $req->bindValue(':mark', $vehicules->getMark());
    $req->bindValue(':whell', $vehicules->getWhell(), PDO::PARAM_INT);
    $req->bindValue(':powwer', $vehicules->getPowwer(), PDO::PARAM_INT);
    $req->bindValue(':id', $vehicules->getId(),PDO::PARAM_INT);

  // Verification truc
    if ($vehicules->getType() == 'Truc'){
      $req->bindValue(':food',$vehicules->getFood());
    } else $req->bindValue(':food', null);


// Moto
 if ($vehicules->getType() == 'Moto'){
    $req->bindValue(':helmet',$vehicules->getHelmet());
  } else $req->bindValue(':helmet', null);

// Car
  if ($vehicules->getType() == 'Car'){
     $req->bindValue(':sunroof',$vehicules->getSunroof());
   } else $req->bindValue(':sunroof', null);



    $req->execute();

}
/**
 * [delete description]
 * @param  [type] $vehicules [description]
 * @return [type]            [description]
 */
  public function delete($vehicules)
  {
    $req = $this->_db->prepare('DELETE FROM Vehicule WHERE id = :id');
    $req->bindValue(':id',$vehicules,PDO::PARAM_INT);

       $req->execute();
     }
  }
