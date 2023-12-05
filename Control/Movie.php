<?php
include __DIR__ . "/Genre.php";
include __DIR__ . "/Product.php";

class Movie extends Product
{
    public $data;

    public $genresFilm = [];
    public function __construct($_data)
    {
        parent::__construct();
        $this->data = $_data;
        $this->setRndGenres();


        $this->printCard();
    }

    private function setRndGenres()
    {
        $this->genresFilm = Genre::fetchAll($this->data["genre_ids"]);
    }


    public function printCard()
    {
        $price = $this->price;
        $sconto = $this->sconto;
        $quantity = $this->quantity;

        $genresFilm = $this->genresFilm;
        $data = $this->data;
        include __DIR__ . "/../Views/movieCard.php";
    }

    public static function fetchAll()
    {
        $movieListString = file_get_contents(__DIR__ . "/../Model/movie_db.json");
        $movieList = json_decode($movieListString, true);
        $movies = [];

        //assigning all propierties
        $_quantity = rand(0, 100);
        $_price = rand(5, 200);

        foreach ($movieList as $_movie) {
            $movies[] = new Movie($_movie);
        }
        // return $movies;
    }

}



?>