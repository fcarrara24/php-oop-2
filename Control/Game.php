<?php
include __DIR__ . "/Product.php";

class Game extends Product
{
    public $data;


    public function __construct($_data)
    {
        parent::__construct();
        $this->data = $_data;

        $this->printCard();
    }


    public function printCard()
    {
        $price = $this->price;
        $sconto = $this->sconto;
        $quantity = $this->quantity;


        $data = $this->data;
        include __DIR__ . "/../Views/gameCard.php";
    }

    public static function fetchAll()
    {
        $gameString = file_get_contents(__DIR__ . "/../Model/steam_db.json");
        $gameList = json_decode($gameString, true);
        $games = [];

        //assigning all propierties
        $_quantity = rand(0, 100);
        $_price = rand(5, 200);

        foreach ($gameList as $_game) {
            $games[] = new Game($_game);
        }
        // return $books;
    }

}



?>