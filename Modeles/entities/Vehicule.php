<?php

declare(strict_types=1);
 abstract class Vehicule{
                        protected $id;
                        protected $km;
                        protected $mark;
                        protected $whell;
                        protected $power;

public function __construct(array $data){

$this->hydrate($data);


  }

    /**
     * @param array $data
     */
    public function hydrate(array $data)
    {

  foreach ($data as $key => $value)
      {

        $method = 'set' . ucfirst($key);
        if (method_exists($this, $method))

        {
          $this->$method($value);

        }

      }
    }

     /**
      * @return mixed
      */
     public function getId()
     {

         return $this->id;
     }

     /**
      * @return mixed
      */
     public function getKm()
     {
         return $this->km;
     }

     /**
      * @return mixed
      */
     public function getMark()
     {
         return $this->mark;
     }

     /**
      * @return mixed
      */
     public function getPower()
     {
         return $this->power;
     }

     /**
      * @return mixed
      */
     public function getWhell()
     {
         return $this->whell;
     }

     /**
      * @param mixed $id
      */
     public function setId($id)
     {
        $id = (int)$id;
         $this->id = $id;
     }

     /**
      * @param mixed $km
      */
     public function setKm($km)
     {
       $km = (int)$km;
         $this->km = $km;
     }

     /**
      * @param mixed $mark
      */
     public function setMark($mark)
     {
         $this->mark = $mark;
     }

     /**
      * @param mixed $power
      */
     public function setPower($power)
     {
       $power = (int)$power;
         $this->power = $power;
     }

     /**
      * @param mixed $whell
      */
     public function setWhell($whell)
     {
       $whell = (int)$whell;
         $this->whell = $whell;
     }



}
