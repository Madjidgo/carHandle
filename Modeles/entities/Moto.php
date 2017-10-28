<?php

declare(strict_types=1);
class Moto extends Vehicule{

protected $helmet;

    /**
     * Get the value of Helmet
     *
     * @return mixed
     */
    public function getHelmet()
    {
        return $this->helmet;
    }

    /**
     * Set the value of Helmet
     *
     * @param mixed helmet
     *
     * @return self
     */
    public function setHelmet($helmet)
    {
        $this->helmet = $helmet;

        return $this;
    }

}



 ?>
