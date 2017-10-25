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
    var_dump($vehicules);
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

    return new Vehicule($vehicules);
  }

/**
 * [add description]
 * @param [type] $vehicules [description]
 */
  public function add($vehicules){
    $req = $this->_db->prepare('INSERT INTO Vehicule(km,mark,whell,power) VALUES( :km,:mark,:whell,:power)');

    $req->bindValue(':km', $vehicules->km());
    $req->bindValue(':mark', $vehicules->mark());
    $req->bindValue(':whell', $vehicules->whell());
    $req->bindValue(':power', $vehicules->power());

    $req->execute();
  }

/**
 * [update description]
 * @param  [type] $vehicules [description]
 * @return [type]            [description]
 */
  public function update($vehicules){
    $req = $this->_db->prepare('UPDATE Vehicule SET km = :km,mark = :mark , whell = :mark, power = :power WHERE id = :id');
    $req->bindValue(':km', $vehicules->km());
    $req->bindValue(':mark', $vehicules->mark());
    $req->bindValue(':whell', $vehicules->whell());
    $req->bindValue(':power', $vehicules->power());
    $req->bindValue(':id', $vehicules->id());

    $req->execute();
  }



}
