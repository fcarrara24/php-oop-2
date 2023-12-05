<?php
include __DIR__ . "/Product.php";

class Book extends Product
{
    public $data;

    public $genresFilm = [];
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

        $genresFilm = $this->genresFilm;
        $data = $this->data;
        include __DIR__ . "/../Views/bookCard.php";
    }

    public static function fetchAll()
    {
        $movieListString = file_get_contents(__DIR__ . "/../Model/books_db.json");
        $movieList = json_decode($movieListString, true);
        $books = [];

        //assigning all propierties
        $_quantity = rand(0, 100);
        $_price = rand(5, 200);

        foreach ($movieList as $_book) {
            $books[] = new Book($_book);
        }
        // return $books;
    }

}



?>