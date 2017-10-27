<?php

declare(strict_types=1);
 class Truc extends Vehicule
 {
   protected $food;

    /**
     * Get the value of Food
     *
     * @return mixed
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Set the value of Food
     *
     * @param mixed food
     *
     * @return self
     */
    public function setFood($food)
    {
        $this->food = $food;

        return $this;
    }

}
