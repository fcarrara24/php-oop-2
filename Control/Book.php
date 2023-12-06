<?php
include __DIR__."/Product.php";
include __DIR__."/../Traits/DrawCard.php";

class Book extends Product {
    use DrawCard;
    public $data;

    public $genresFilm = [];
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
        $this->traitPrintCard($this->formatCard());
        //include __DIR__."/../Views/bookCard.php";
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
        $movieListString = file_get_contents(__DIR__."/../Model/books_db.json");
        $movieList = json_decode($movieListString, true);
        $books = [];

        //assigning all propierties
        $_quantity = rand(0, 100);
        $_price = rand(5, 200);

        foreach($movieList as $_book) {
            $books[] = new Book($_book);
        }
        // return $books;
    }

}



?>