<?php
include __DIR__."/Genre.php";
include __DIR__."/Product.php";
include __DIR__."/../Traits/DrawCard.php";

class Movie extends Product {
    use DrawCard;
    public $data;

    public $genresFilm = [];
    public function __construct($_data) {
        parent::__construct();
        $this->data = $_data;
        //creating all components 
        $this->data["printStars"] = $this->setStars();
        $this->data["printFlag"] = $this->setFlag();
        $this->data["image"] = $this->data["poster_path"];
        $this->setRndGenres();

        //$common trait to print card
        $this->traitPrintCard($this->formatCard());
    }
    public function formatCard() {
        $cardItem = [
            'price' => $this->price,
            'sconto' => $this->sconto,
            'quantity' => $this->quantity,
            'genresFilm' => $this->genresFilm,
            'data' => $this->data
        ];
        return $cardItem;
    }


    private function setRndGenres() {
        $this->genresFilm = Genre::fetchAll($this->data["genre_ids"]);
    }

    public function setFlag() {
        return "
        <div>
            <small style=\"max-width: 50px; height: auto;\">
                <img src=\"https://flagsapi.com/".($this->data["original_language"] == "en" ? "GB" : strtoupper(substr($this->data["original_language"], 0, 2)))."/flat/64.png\" >
            </small>
        </div>";
    }

    public function setStars() {
        $outString = "";
        for($i = 0; $i < 5; $i++) {
            $outString .= "<i class=\" fa-star d-flex flex-column justify-content-center ".($i < floor($this->data["vote_average"] / 2) ? "fa-solid" : "fa-regular").'"></i>';

        }
        return $outString;
    }
    public function printCard() {
        $price = $this->price;
        $sconto = $this->sconto;
        $quantity = $this->quantity;

        $genresFilm = $this->genresFilm;
        $data = $this->data;
        include __DIR__."/../Views/movieCard.php";
    }






    public static function fetchAll() {
        $movieListString = file_get_contents(__DIR__."/../Model/movie_db.json");
        $movieList = json_decode($movieListString, true);
        $movies = [];

        //assigning all propierties
        $_quantity = rand(0, 100);
        $_price = rand(5, 200);

        foreach($movieList as $_movie) {
            $movies[] = new Movie($_movie);
        }
        // return $movies;
    }

}



?>