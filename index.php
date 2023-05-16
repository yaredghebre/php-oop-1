<?php

class Movie {

    // Dichiarazione VARIABILI D'ISTANZA
    public $title;
    public $director;
    public $year;
    public $genre;
    public $country;
    public $rating;

    // COSTRUTTORE con i primi 4 campi 
    function __construct($_title, $d_irector, $_year, $_genre) {
        $this->title = $_title;
        $this->director = $d_irector;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    // METODO per stammpare i dettagli del film
    public function printMovieDetails() {
        echo "TITOLO: " . $this->title . "<br>";
        echo "REGISTA: ". $this->director . "<br>";
        echo "ANNO: ". $this->year . "<br>";
        echo "GENERE: ". $this->genre . "<br>";
    }
}

// Creo un NEW oggetto MOVIE
$movie = new Movie("Blade Runner 2049", "Denis Villeneuve", "2017", "Sci-Fi");

// Stampo 
echo ("<h2>Film</h2>");
echo ($movie->printMovieDetails());

