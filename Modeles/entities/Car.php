<?php

class Car extends Vehicule {

protected $color;

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
}
