<?php
declare(strict_type=1);

class Car extends Vehicule{

protected  $sunroof;


    /**
     * Get the value of Sunroof
     *
     * @return mixed
     */
    public function getSunroof()
    {
        return $this->sunroof;
    }

    /**
     * Set the value of Sunroof
     *
     * @param mixed sunroof
     *
     * @return self
     */
    public function setSunroof($sunroof)
    {
        $this->sunroof = $sunroof;

        return $this;
    }

}
