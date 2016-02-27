<?php

namespace Restaurante;

class Bill
{
    private $items = [];
    private $total = 0;
    private $paid = 0;
    private $points = 0;

    public function addItem(Priced $priced)
    {
        $this->items[] = $priced;
        $this->total += $priced->getPrice();
        $this->points += (int) floor($priced->getPrice());
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotal()
    {
        return $this->total * 1.10;
    }

    public function paidWithCash($amount)
    {
        $this->paid += $amount;
    }

    public function getUnpaid()
    {
        return $this->getTotal() - $this->paid;
    }

    public function getPaid()
    {
        return $this->paid;
    }

    public function getPoints()
    {
        return $this->points;
    }
}
