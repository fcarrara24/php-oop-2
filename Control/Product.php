<?php

abstract class Product {
    protected float $price;
    public $sconto;
    protected int $quantity;

    protected function __construct() {
        $this->price = rand(5, 20);
        $this->quantity = rand(50, 200);
        $this->sconto = $this->setSconto();

    }
    public function setSconto() {
        try {
            if($this->quantity > (15 * $this->price)) {
                throw new Exception("sconto non disponibile");
            }
            $sconto = intval(intval($this->quantity) / intval($this->price));
            return '<div class="bg-success text-white mt-3 " style="max-width: max-content">sconto: '.$sconto.' %</div>';
        } catch (Exception $e) {
            return '<div class="bg-danger text-white mt-3" style="max-width: max-content">'.$e->getMessage().'</div>';
        }
    }

}


?>