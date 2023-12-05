<?php
include __DIR__ . "/Genre.php";
class Movie
{
    public $data;
    public $genresFilm = [];
    public function __construct($_data)
    {


        $this->data = $_data;
        $this->setRndGenres();
        $this->printCard();
    }

    private function setRndGenres()
    {
        $this->genresFilm = Genre::fetchAll($this->data["genre_ids"]);
    }

    private function printCard()
    {
        $genresFilm = $this->genresFilm;
        $data = $this->data;
        include __DIR__ . "/../Views/card.php";
    }

    public static function fetchAll()
    {
        $movieListString = file_get_contents(__DIR__ . "/../Model/movie_db.json");
        $movieList = json_decode($movieListString, true);
        $movies = [];
        foreach ($movieList as $_movie) {
            $movies[] = new Movie($_movie);

        }
        return $movies;
    }

}





?>