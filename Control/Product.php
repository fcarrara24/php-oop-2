<?php

abstract class Product
{
    protected float $price;
    protected int $sconto = 0;
    protected int $quantity;

    protected function __construct($price, $quantity)
    {
        $this->price = $price;
        $this->quantity = $quantity;
    }

}


?>