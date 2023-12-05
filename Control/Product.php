<?php

abstract class Product
{
    protected float $price;
    protected int $sconto = 0;
    protected int $quantity;

    protected function __construct()
    {
        $this->price = rand(5, 20);
        $this->quantity = rand(50, 200);
    }


}


?>