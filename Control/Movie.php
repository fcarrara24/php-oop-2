<?php

class Movie
{
    public $data;
    public function __construct($_data)
    {
        $this->data = $_data;
    }

    public function printCard()
    {
        $data = $this->data;
        include __DIR__ . "/../Views/card.php";
    }
}

//getting data not parsed
$movieListString = file_get_contents(__DIR__ . "/../Model/movie_db.json");
$movieList = json_decode($movieListString, true);

$movies = [];

foreach ($movieList as $_movie) {
    $movies[] = new Movie($_movie);

}


?>