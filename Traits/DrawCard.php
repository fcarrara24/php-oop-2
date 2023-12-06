<?php
trait DrawCard {
    public function traitPrintCard($item) {
        extract($item);
        include __DIR__."/../Views/card.php";

    }
}


?>