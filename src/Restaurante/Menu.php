<?php

namespace Restaurante;

class Menu implements Priced
{
    private $number;
    private $price;

    public function __construct($number, $price)
    {
        $this->number = $number;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

}
