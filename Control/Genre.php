<?php

class Genre
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function printGenre()
    {
        echo '<span class="p-1 d-inline-block s" ><span class="card bg-primary px-1 w-auto text-white">' . $this->name . '</span> </span>';
    }

    public static function fetchAll($genre_ids)
    {
        $genreListString = file_get_contents(__DIR__ . "/../Model/genre_db.json");
        $allGenres = json_decode($genreListString, true);

        $createdGenresFilm = [];
        $iterations = count($genre_ids);
        for ($i = 0; $i < $iterations; $i++) {
            $createdGenresFilm[] = new Genre($allGenres[rand(0, count($allGenres) - 1)]);
        }
        return $createdGenresFilm;
    }


}



?>