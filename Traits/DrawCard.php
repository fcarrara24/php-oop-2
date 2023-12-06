<?php
trait DrawCard {
    public function traitPrintCard($item, $cardType) {
        extract($item);
        include __DIR__."/../Views/$cardType.php";

    }
}


?>