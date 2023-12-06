<?php
trait DrawCard {
    public function traitPrintCard($item) {
        extract($item);
        include __DIR__."/../Views/card.php";

    }
    public function formatCard() {
        $cardItem = [
            'price' => $this->price,
            'sconto' => $this->sconto,
            'quantity' => $this->quantity,
            'genresFilm' => (isset($this->genresFilm) ? $this->genresFilm : null),

            'data' => $this->data
        ];
        return $cardItem;
    }
}



?>