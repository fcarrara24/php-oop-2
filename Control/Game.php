<?php
include __DIR__."/Product.php";
include __DIR__."/../Traits/DrawCard.php";

class Game extends Product {
    use DrawCard;
    public $data;


    public function __construct($_data) {
        parent::__construct();
        $this->data = $_data;

        $this->printCard();

    }


    public function printCard() {
        $price = $this->price;
        $sconto = $this->sconto;
        $quantity = $this->quantity;

        $data = $this->data;
        $this->data["image"] = $this->buildImageUrl();
        $this->traitPrintCard($this->formatCard());
        //include __DIR__."/../Views/gameCard.php";
    }
    private function buildImageUrl() {
        return 'https://cdn.cloudflare.steamstatic.com/steam/apps/'.$this->data["appid"].'/header.jpg';
    }
    public function formatCard() {
        $cardItem = [
            'price' => $this->price,
            'sconto' => $this->sconto,
            'quantity' => $this->quantity,
            //'genresFilm' => $this->genresFilm,
            'data' => $this->data
        ];
        return $cardItem;
    }

    public static function fetchAll() {
        $gameString = file_get_contents(__DIR__."/../Model/steam_db.json");
        $gameList = json_decode($gameString, true);
        $games = [];

        //assigning all propierties
        $_quantity = rand(0, 100);
        $_price = rand(5, 200);

        foreach($gameList as $_game) {
            $games[] = new Game($_game);
        }
        // return $books;
    }

}



?>