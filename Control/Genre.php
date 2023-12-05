<?php

$url = 'https://api.themoviedb.org/3/genre/movie/list?api_key=70e1fcb24d9cf905714f0cb390e8861a&language=it-IT';
$response = file_get_contents($url);
$responseData = json_decode($response, true);

$genreList = [];
$outString = '';

if ($responseData === null || !isset($responseData['genres'])) {
    // Gestisci l'errore nella decodifica JSON o struttura non valida
    echo "Errore nella decodifica JSON o struttura non valida.";
} else {


    foreach ($data["genre_ids"] as $item) {
        foreach ($responseData['genres'] as $webGenre) {
            if ($item === $webGenre['id']) {
                $outString .= $webGenre['name'] . '  ' . ' | ';
            }
        }
    }
    echo $outString;
}



?>